<?php
namespace App\Models;
use Illuminate\Support\Arr;

class service{
    public static function all() : array {
        return[
            [
                'id' => 1,
                'name' => 'Hair Cutting and Styling',
                'description' => 'Trendy haircuts and styles for a fresh look. Affordable and stylish.',
                'imgUrl' => 'https://img.freepik.com/free-photo/close-up-hairdresser-using-scissors_23-2149141721.jpg?t=st=1722195922~exp=1722199522~hmac=51d5fc8af8036078f72dc6a4057a51c13f5015391e746e4a0bbe1a562a8d4852&w=740',
                'startPrice' => 300,
                'endPrice' => 800
            ],
            [
                'id' => 2,
                'name' => 'Hair Coloring and Highlights',
                'description' => 'Add vibrant color or highlights for a chic new style. Budget-friendly options available.',
                'imgUrl' => 'https://img.freepik.com/free-photo/side-view-woman-hair-salon_23-2150668447.jpg?t=st=1722196214~exp=1722199814~hmac=4cdb5d22f13490c3dc302e5bcf7d4f9a76397ec010716fccdbccf107c1a91cd7&w=740',
                'startPrice' => 1000,
                'endPrice' => 2500
            ],
            [
                'id' => 3,
                'name' => 'Keratin Treatments',
                'description' => 'Smooth and sleek hair with our affordable keratin treatments.',
                'imgUrl' => 'https://img.freepik.com/free-photo/side-view-woman-hair-slugging-night-routine_23-2150396581.jpg?t=st=1722196248~exp=1722199848~hmac=d97dfe3ccc93c7ee25dee3de4b9f9c4eb1783c8dbeabae63075570c7f4fb37e0&w=740',
                'startPrice' => 2500,
                'endPrice' => 5000
            ],
            [
                'id' => 4,
                'name' => 'Nail Care and Extensions',
                'description' => 'Pamper your nails with manicures, pedicures, and extensions at great prices.',
                'imgUrl' => 'https://img.freepik.com/free-photo/beautiful-woman-hands-person-wearing-gloves_23-2148766606.jpg?t=st=1722196272~exp=1722199872~hmac=85ab6d14017af0aabc3fbf0da26d31e23fc7c4ce19f2e5949536a24288ec2453&w=740',
                'startPrice' => 500,
                'endPrice' => 1500
            ],
            [
                'id' => 5,
                'name' => 'Facials and Skincare',
                'description' => 'Refresh your skin with our relaxing facials and skincare treatments.',
                'imgUrl' => 'https://img.freepik.com/free-photo/cosmetologist-applying-mask-face-client-beauty-salon_1303-16768.jpg?t=st=1722196305~exp=1722199905~hmac=4f8921ab887fb5b539f4884a8a3bbfcd1a7affb8dd6d33291d5aed30f85b01b3&w=740',
                'startPrice' => 500,
                'endPrice' => 1500
            ],
            [
                'id' => 6,
                'name' => 'Makeup and Beauty Services',
                'description' => 'Professional makeup services for any occasion at wallet-friendly prices.',
                'imgUrl' => 'https://img.freepik.com/free-photo/side-view-stylist-with-eyeliner-working-with-model_23-2147783927.jpg?t=st=1722196327~exp=1722199927~hmac=0228655fcdad61c0758d978474febb1683cf9903892239a0cf16705976b24aba&w=740',
                'startPrice' => 1000,
                'endPrice' => 3000
            ],
            [
                'id' => 7,
                'name' => 'Pedicures and Manicures',
                'description' => 'Get beautiful nails with our pedicure and manicure services. Affordable luxury.',
                'imgUrl' => 'https://img.freepik.com/free-photo/beautiful-female-hands-finger-nail-treatment-making-process-professional-nail-file-drill-action-beauty-hand-care-concept_343596-2351.jpg?t=st=1722196394~exp=1722199994~hmac=6cc2645dcebb60ee0ba7ca59d850fc08f1ef91f49ecdba9452e4f6f42a88b2b0&w=740',
                'startPrice' => 300,
                'endPrice' => 800
            ],
            [
                'id' => 7,
                'name' => 'Hair Removal Services',
                'description' => 'Smooth skin with our gentle hair removal services, priced just right.',
                'imgUrl' => 'https://img.freepik.com/free-photo/beautiful-young-girl-beauty-salon_1157-21123.jpg?t=st=1722196430~exp=1722200030~hmac=358968db5043875108a435845a73ce5f98d95e55363173d442391fbe1cd0e9f2&w=740',
                'startPrice' => 300,
                'endPrice' => 1000
            ]
        ];
    }
    public static function find(int $id): array {
        $service = Arr::first(static::all(), fn($service) => $service['id'] == $id);
    
        if (!$service) {
            abort(404); // This will halt the execution if the service is not found.
        }
    
        return $service; // Ensure the found service is returned.
    }
}