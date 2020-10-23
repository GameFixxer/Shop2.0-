<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @Route("/comments/{id}/vote/{direction}")
     * @param int $id
     * @param string $direction
     * @return JsonResponse
     */
    public function commentVote(int $id, string $direction)
    {
        //todo use id to query db
        //use real logic when db is ready
        if($direction === 'up')
        {
            $currentVoteCount = rand(7,100);
        }else{
            $currentVoteCount = rand(0,5);
        }
        return $this->json(['votes' => $currentVoteCount]);
    }

}