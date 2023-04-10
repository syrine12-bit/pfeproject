<?php


namespace App\Controller;
use App\Entity\Information;
use App\Form\InformationType;
use App\Repository\InformationRepository;
use App\Service\PdfService;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;



/**
 * @Route ("/cv")
 */

class CvController extends AbstractController
{


    /**
     * @Route ("/new" , name="cv_new")
     */
    public function new(Request $request, EntityManagerInterface $entityManager,)
    {
        $information = new Information();
        $form = $this->createForm(InformationType::class, $information);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($information);
            $entityManager->flush();


            $this->addFlash('notice', 'Submitted Successfully!!');

            return $this->redirectToRoute('edit_cv', ['id' => $information->getId()]);


        }

        return $this->render('saisir.html.twig', [
            'form' => $form->createView(),
            'information' => $information

        ]);

    }
    /**
     * @Route("/edit/{id}", name="edit_cv")
     */
    public function show(
        Request $request,
        EntityManagerInterface $entityManager ,
        Information $information): Response
    {

        $form = $this->createForm(InformationType::class, $information);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($information);
            $entityManager->flush();
            $this->addFlash('notice', 'Submitted Successfully!!');
            return $this->redirectToRoute('edit_cv', ['id' => $information->getId()]);

        }

        return $this->render('cv.html.twig', [
            'form' => $form->createView(),
            'information' => $information,
        ]);
    }
    /**
     * @Route("/pdf/{id}", name="information.pdf")
     */
    public function download(Information $information = null,PdfService $pdf)
    {
        $html = $this->render('cv.html.twig',['information' =>$information]);
        $pdf->showPdfFile($html);

    }



//
//    public function generatePdf(Pdf $pdf, InformationRepository $informationRepository, $id): Response
//    {
//        // Récupérez les données du CV en utilisant une requête SQL SELECT
//        $information = $informationRepository->find($id);
//
//        // Utilisez Twig pour générer le modèle de CV
//        $html = $this->renderView('/cv', [
//            'prenom' => $information->getPrenom(),
//            'nom_de_famille' => $information->getNomDeFamille(),
//            'titre_du_profil' => $information->getTitreDuProfil(),
//            'numero'=> $information->getNumero(),
//            'email' => $information->getEmail(),
//            'adresse'=> $information->getAdresse(),
//            'code_postal'=>$information->getCodePostal(),
//            'ville'=>$information->getVille(),
//            'formation'=>$information->getFormation(),
//            'etablissement'=>$information->getEtablissement(),
//            'lieu'=>$information->getLieu(),
//            'competence'=>$information->getCompetence(),
//            'poste'=>$information->getPoste(),
//            'employer'=>$information->getEmployer(),
//            'date_debut_travaille'=>$information->getDateDebutTravaille(),
//            'date_fin_travaille'=>$information->getDateFinTravaille(),
//            'description_travaille'=>$information->getDescriptionTravaille(),
//
//
//        ]);
//
//        // Générez le PDF à partir du HTML
//        $pdfContent = $pdf->getOutputFromHtml($html);
//
//        // Retournez la réponse HTTP avec le PDF généré
//        return new Response(
//            $pdfContent,
//            Response::HTTP_OK,
//            [
//                'Content-Type' => 'application/pdf',
//                'Content-Disposition' => 'attachment; filename="mon_cv.pdf"',
//            ]
//        );
//    }

}
