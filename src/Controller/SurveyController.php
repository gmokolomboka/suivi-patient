<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Survey;
use App\Form\SurveyType;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Repository\SurveyRepository;

class SurveyController extends AbstractController
{

  /**
  * @Route("/survey/{id}", name="app_survey", requirements={"id"="\d+"})
  */
  public function index(Survey $survey, Request $request)
  {
        $survey = new Survey();
        $form = $this->createForm(SurveyType::class, $survey);
        return $this->render('survey/index.html.twig', [
            'survey' => $survey
        ]);
  }

    /**
     * @Route("/survey/ask", name="app_survey_ask",)
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     */
    public function askSurvey(Request $request)
    {
        $survey = new Survey();
        $form = $this->createForm(SurveyType::class, $survey);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $survey->setUser($this->getUser());
            $survey->setCreated(new \DateTime());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($survey);
            $entityManager->flush();
            return $this->redirectToRoute("app_survey", ['id' => $survey->getId()]);
        }

        return $this->render('survey/survey.html.twig', [
            'surveyForm' => $form->createView()
        ]);
    }
}
