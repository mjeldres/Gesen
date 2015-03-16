<?php

namespace Cosaco\GesenBundle\Controller;
//use Symfony\Component\HttpFoundation\Response;


use Cosaco\GesenBundle\Entity\Reserva;
use Cosaco\GesenBundle\Entity\ReservaDia;
use Cosaco\GesenBundle\Form\HorarioReservaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class HorarioController extends Controller
{
    
    /*
     * Fix para cargar horas por defecto al seleccionar la ruta horario/
     */
    public function horarioIndexAction()
    {
        return $this->forward('CosacoGesenBundle:Horario:show', array('id_dep'=>null, 'fecha'=>null));    
    }
    
    // Cargamos el horario
    public function showAction($id_dep=null,$fecha=null)
    {
      
        $em = $this->getDoctrine()->getManager();
      
        if($id_dep==null) {
            
            $dep=$em->getRepository('CosacoGesenBundle:Dependencia')
                ->createQueryBuilder('d')
                ->orderBy('d.id', 'ASC')
                ->setFirstResult(1)
                ->setMaxResults(1)
                ->getQuery()
                ->getOneOrNullResult();
                    
            $id_dep=(int)$dep->getId();
          
        } else {
            
            $dep=$em->getRepository('CosacoGesenBundle:Dependencia')->find($id_dep);
            
            if(!$dep) {
                throw $this->createNotFoundException('No se encontrado la dependencia ingresada');
            }
            
        }
                     
        // Valor por defecto para las fechas que no se indiquen
        if($fecha==null) {
            $fecha=time();
        } else {
        
            if(!Fecha::is_timestamp($fecha)) {
                throw $this->createNotFoundException('La fecha indicada no es válida');
            }
        
        }
       
        /*
         * Transformo la fecha a milisegundos
         */
        $fecha*=1000;
            
        // Obtenemos todos los bloques horarios existentes
        $bloques=$em->getRepository('CosacoGesenBundle:Horario')->findAll();
        $dependencias=$em->getRepository('CosacoGesenBundle:Dependencia')->findAll();
              
        return $this->render('CosacoGesenBundle:Horario:Calendario.html.twig', array('id_dep'=>$id_dep, 'fecha'=>$fecha, 'bloques'=>$bloques, 'dependencias'=>$dependencias));    
        
    }
    
    public function loadAction(Request $request) {
        
       // sleep(10);
        
        // Obtenemos usuario logeado
        $user = $this->getUser();
        
        $user_login=(bool)$request->request->get('user_id');
        
        $message = "";
        $error = false;
        
        
        /*
         * En caso de que la sesión del usuario expire retornamos mensaje de error
         */
        if ($user_login && $user === null) {
            
            $message = 'Se ha detectado que la sesión de usuario activa ha expirado o se han desactivado las cookies. <strong>¿Desea ingresar nuevamente?</strong>';
            $error = true;
            // return new JsonResponse(array('error'=> true, 'message'=> 'Se ha detectado que la cuenta de usuario activa ha expirado o se han desactivado las cookies. <strong>¿Desea ingresar nuevamente?</strong>'));
        }

        // Obtengo la fecha incial de la reserva  
        $fechaEntrada=(int)$request->request->get("fecha");
        
        // Obtengo el cod de la dependencia
        $dep=(int)$request->request->get("dependencia");

        // Primer día de la semana relativo a la $dTime
        if(date('N', $fechaEntrada)>1) { $fechaInicio=date('Y-m-d', strtotime('Last Monday', $fechaEntrada)); }
        else { $fechaInicio=date('Y-m-d', $fechaEntrada); }
        
        // Ultimo día de la semana relativo a $dTime
        $fechaTermino=date('Y-m-d', strtotime('+6 days', strtotime($fechaInicio)));
        
        $em = $this->getDoctrine()->getManager();      
            $q = $em->createQuery(
            'SELECT rh.fechaReserva AS fecha, '
                    . 'MIN(rh.horario) AS bmin, '
                    . 'MAX(rh.horario) AS bmax, '
                    . 'rd.id AS id_dia, '
                    . 'IDENTITY(r.usuario) AS id_usuario, '
                    . 'CONCAT(rcur.grado, \'°\', UPPER(rcur.letra)) AS curso_letra, '
                    . 'rcur.nivel AS curso_nivel, '
                    . '(CASE WHEN rasig.id IS NULL THEN rtaller.nombreTaller ELSE rasig.nombre END) AS asignatura '
                        . 'FROM CosacoGesenBundle:ReservaHora rh '
                            . 'JOIN rh.reservaDia rd '
                            . 'JOIN rd.reserva r '
                            . 'LEFT JOIN r.curso rcur '
                            . 'LEFT JOIN r.asignatura rasig '
                            . 'LEFT JOIN r.taller rtaller '
                                . 'WHERE IDENTITY(rh.dependencia) = :dep AND '
                                    . '(rh.fechaReserva BETWEEN :finicio AND :ftermino) '
                                        . 'GROUP BY rd.id '
                                            . 'HAVING bmin>0 AND bmax>0')
                ->setParameters(array(
                    'dep'=>$dep,
                    'finicio'=>$fechaInicio,
                    'ftermino'=>$fechaTermino
                ));


            $reservas= $q->getArrayResult();

            return new JsonResponse(array('error' => $error, 'message' => $message , 'f_inicial' => $user, 'f_termino'=>$fechaTermino, 'reservas'=>$reservas));

    }
    
    /**
     * Creates a form to create a Reserva entity.
     *
     * @param Reserva $entity The entity
     *
     * @return Form The form
     */
    private function createCreateForm(Reserva $entity)
    {
        $form = $this->createForm(new HorarioReservaType(), $entity, array(
            'action' => $this->generateUrl('_horario_crear_reserva'),
            'method' => 'POST',
        ));

    //    $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }
    
    /**
     * Displays a form to create a new Reserva entity.
     *
     */
    public function newAction()
    {
        sleep(2);
       
        $entity = new Reserva();
        $dia = new ReservaDia();
        
        $entity->getDias()->add($dia);

        $form   = $this->createCreateForm($entity);
        
        return $this->render('CosacoGesenBundle:Horario:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }
    
    public function crearAction(Request $request)
    {
        $entity = new Reserva();

        $form   = $this->createCreateForm($entity);
        
        $form->bind($request);
                
        $entity->setUsuario($this->getUser());

     //   $entity->setTipoReserva('Curricular');
        
        if($form->isValid()) 
        {
            $response['saludo'] = 'hola';
        }
        else
        {
            $response['saludo'] = $form->getErrorsAsString();
        }
  

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
        
        return new JsonResponse($response);
        
    }
}

abstract class Fecha {
    
    /*
     * 
     * @parm string $timestamp
     * @return bool
     */    
    static function is_timestamp($timestamp)
    {
        $check = (is_int($timestamp) OR is_float($timestamp)) ? $timestamp : (string) (int) $timestamp;
        
        return ($check === $timestamp)
            AND ((int) $timestamp <= strtotime('+30 years'))
            AND ((int) $timestamp >= strtotime('-30 years'));
    }
}