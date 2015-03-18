<?php

namespace Cosaco\GesenBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cosaco\GesenBundle\Entity\ReservaHora;
use Cosaco\GesenBundle\Form\Type\HorarioReservaHoraType;

/**
 * ReservaHora controller.
 *
 */
class ReservaHoraController extends Controller
{

    /**
     * Lists all ReservaHora entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CosacoGesenBundle:ReservaHora')->findAll();

        return $this->render('CosacoGesenBundle:ReservaHora:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new ReservaHora entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new ReservaHora();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('reservas_hora_show', array('id' => $entity->getId())));
        }

        return $this->render('CosacoGesenBundle:ReservaHora:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a ReservaHora entity.
     *
     * @param ReservaHora $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ReservaHora $entity)
    {
        $form = $this->createForm(new HorarioReservaHoraType(), $entity, array(
            'action' => $this->generateUrl('reservas_hora_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ReservaHora entity.
     *
     */
    public function newAction()
    {
        $entity = new ReservaHora();
        $form   = $this->createCreateForm($entity);

        return $this->render('CosacoGesenBundle:ReservaHora:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ReservaHora entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CosacoGesenBundle:ReservaHora')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ReservaHora entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CosacoGesenBundle:ReservaHora:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ReservaHora entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CosacoGesenBundle:ReservaHora')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ReservaHora entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CosacoGesenBundle:ReservaHora:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a ReservaHora entity.
    *
    * @param ReservaHora $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ReservaHora $entity)
    {
        $form = $this->createForm(new HorarioReservaHoraType(), $entity, array(
            'action' => $this->generateUrl('reservas_hora_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ReservaHora entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CosacoGesenBundle:ReservaHora')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ReservaHora entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('reservas_hora_edit', array('id' => $id)));
        }

        return $this->render('CosacoGesenBundle:ReservaHora:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ReservaHora entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CosacoGesenBundle:ReservaHora')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ReservaHora entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('reservas_hora'));
    }

    /**
     * Creates a form to delete a ReservaHora entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reservas_hora_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
