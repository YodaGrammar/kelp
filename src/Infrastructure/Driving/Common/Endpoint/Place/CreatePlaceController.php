<?php

declare(strict_types=1);

namespace App\Infrastructure\Driving\Common\Endpoint\Place;

use App\Application\Factory\Place\CreatePlaceCommandFactory;
use App\Infrastructure\Driven\Exception\InvalidJsonException;
use App\Infrastructure\Driving\Common\Dto\Place\PlaceWriteDto;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

final class CreatePlaceController
{
    public function __invoke(Request $request, SerializerInterface $serializer, ValidatorInterface $validator, CommandBus $commandBus)
    {
        $placeWriteDto = $serializer->deserialize($request->getContent(), PlaceWriteDto::class, 'json');

        if (!$placeWriteDto instanceof PlaceWriteDto) {
            throw new InvalidJsonException(PlaceWriteDto::class);
        }

        $violations = $validator->validate($placeWriteDto);

        if ($violations->count() > 0) {
            throw new InvalidJsonException(PlaceWriteDto::class);
        }
        $commandBus->handleCommand(list($id, $name) = CreatePlaceCommandFactory::createFromDto($placeWriteDto));

        //$result = $ixopayService->createScheduleDebit($transactionScheduleIxopayDto);

        //if (null === $result) {
        //    return new JsonResponse(Response::HTTP_BAD_REQUEST);
        //}

        //return new JsonResponse($result);
    }
}
