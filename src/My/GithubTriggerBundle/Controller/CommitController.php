<?php

namespace My\GithubTriggerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use My\GithubTriggerBundle\Entity\Commit;

/**
 * Commit controller.
 *
 * @Route("/commit")
 */
class CommitController extends Controller
{
    /**
     * Lists all Commit entities.
     *
     * @Route("/", name="commit")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('MyGithubTriggerBundle:Commit')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Commit entity.
     *
     * @Route("/{id}/show", name="commit_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MyGithubTriggerBundle:Commit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Commit entity.');
        }

        return array(
            'entity'      => $entity,
        );
    }

}
