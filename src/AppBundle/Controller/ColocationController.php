<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Colocation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Colocation controller.
 *
 */
class ColocationController extends Controller
{
    /**
     * Lists all colocation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $colocations = $em->getRepository('AppBundle:Colocation')->findAll();

        return $this->render('@App/colocation/index.html.twig', array(
            'colocations' => $colocations,
        ));
    }

    /**
     * Creates a new colocation entity.
     *
     */
    public function newAction(Request $request)
    {
      $colocation = new Colocation();
      $form = $this->createForm('AppBundle\Form\ColocationType', $colocation);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
          $photo = $colocation->getPhoto();

          // Generate a unique name for the file before saving it
          $fileName = md5(uniqid()).'.'.$photo->guessExtension();

          // Move the file to the directory where brochures are stored
          $photo->move(
              $this->getParameter('photos_colocs'),
              $fileName
          );

          // Update the 'brochure' property to store the PDF file name
          // instead of its contents
          $colocation->setPhoto($fileName);

//          $adresse = str_replace(' ', '-', $colocation->getAdresse());
//          $codePostal = str_replace(' ', '-', $colocation->getCodePostal());
//          $ville = str_replace(' ', '-', $colocation->getVille());
//          $nominatim = 'http://nominatim.openstreetmap.org/search/?q=' . $adresse . '-' . $codePostal . '-' . $ville . '&format=json&addressDetails=1' ;
//          $nominatim = file_get_contents($nominatim);
//          $nominatim = json_decode($nominatim, true);
//          $colocation->setLatitude($nominatim[0]['lat']);
//          $colocation->setLongitude($nominatim[0]['lon']);
          $em = $this->getDoctrine()->getManager();
          $em->persist($colocation);
          $em->flush();
          return $this->redirectToRoute('colocation_show', array('id' => $colocation->getId()));
      }
      return $this->render('@App/colocation/new.html.twig', array(
          'colocation' => $colocation,
          'form' => $form->createView(),
      ));
    }

    /**
     * Finds and displays a colocation entity.
     *
     */
    public function showAction(Colocation $colocation)
    {
        $deleteForm = $this->createDeleteForm($colocation);

        return $this->render('@App/colocation/show.html.twig', array(
            'colocation' => $colocation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing colocation entity.
     *
     */
    public function editAction(Request $request, Colocation $colocation)
    {
        $deleteForm = $this->createDeleteForm($colocation);
        $editForm = $this->createForm('AppBundle\Form\ColocationType', $colocation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('colocation_edit', array('id' => $colocation->getId()));
        }

        return $this->render('@App/colocation/edit.html.twig', array(
            'colocation' => $colocation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a colocation entity.
     *
     */
    public function deleteAction(Request $request, Colocation $colocation)
    {
        $form = $this->createDeleteForm($colocation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($colocation);
            $em->flush();
        }

        return $this->redirectToRoute('colocation_index');
    }

    /**
     * Creates a form to delete a colocation entity.
     *
     * @param Colocation $colocation The colocation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Colocation $colocation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('colocation_delete', array('id' => $colocation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
