<?php
namespace App\Http\Controllers\Api\v1;
class RoomController
{
    public function index()
    {
        $data = array (
            0 =>
                array (
                    'category' =>
                        array (
                            'id' => 1,
                            'nameRu' => 'Кухня',
                            'nameEn' => NULL,
                            'nameKz' => NULL,
                            'logoUrl' => 'https://ik.imagekit.io/stw2z8z0k/Photos/photo1674500338_Lxbe-Cviw.png?ik-sdk-version=javascript-1.4.3&updatedAt=1674502375896',
                            'active' => true,
                            'parentId' => NULL,
                            'priority' => 1,
                            'mainMenu' => true,
                            'smallLogoUrl' => NULL,
                            'parent' => NULL,
                            'inverseParent' =>
                                array (
                                ),
                            'items' =>
                                array (
                                ),
                        ),
                    'itemsCount' => 20,
                ),
            1 =>
                array (
                    'category' =>
                        array (
                            'id' => 3,
                            'nameRu' => 'Гостиная',
                            'nameEn' => NULL,
                            'nameKz' => NULL,
                            'logoUrl' => 'https://ik.imagekit.io/stw2z8z0k/Scategories/living_room_dYn0H4Rwl.png?ik-sdk-version=javascript-1.4.3&updatedAt=1665944126902',
                            'active' => true,
                            'parentId' => NULL,
                            'priority' => 3,
                            'mainMenu' => true,
                            'smallLogoUrl' => NULL,
                            'parent' => NULL,
                            'inverseParent' =>
                                array (
                                ),
                            'items' =>
                                array (
                                ),
                        ),
                    'itemsCount' => 30,
                ),
            2 =>
                array (
                    'category' =>
                        array (
                            'id' => 2,
                            'nameRu' => 'Спальня',
                            'nameEn' => NULL,
                            'nameKz' => NULL,
                            'logoUrl' => 'https://ik.imagekit.io/stw2z8z0k/Photos/photo1674502521_r_R23YeZM_1_zGTSAAbIH.png?ik-sdk-version=javascript-1.4.3&updatedAt=1674502815843',
                            'active' => true,
                            'parentId' => NULL,
                            'priority' => 2,
                            'mainMenu' => true,
                            'smallLogoUrl' => NULL,
                            'parent' => NULL,
                            'inverseParent' =>
                                array (
                                ),
                            'items' =>
                                array (
                                ),
                        ),
                    'itemsCount' => 3,
                ),
            3 =>
                array (
                    'category' =>
                        array (
                            'id' => 6,
                            'nameRu' => 'Детская',
                            'nameEn' => NULL,
                            'nameKz' => NULL,
                            'logoUrl' => 'https://ik.imagekit.io/stw2z8z0k/Photos/e32350b3-93d2-42ab-8f4c-d47a65cea388_yo9x1VwJ6.jpeg?ik-sdk-version=javascript-1.4.3&updatedAt=1674503174452',
                            'active' => true,
                            'parentId' => NULL,
                            'priority' => 4,
                            'mainMenu' => true,
                            'smallLogoUrl' => NULL,
                            'parent' => NULL,
                            'inverseParent' =>
                                array (
                                ),
                            'items' =>
                                array (
                                ),
                        ),
                    'itemsCount' => 1,
                ),
            4 =>
                array (
                    'category' =>
                        array (
                            'id' => 7,
                            'nameRu' => 'Домашний офис',
                            'nameEn' => NULL,
                            'nameKz' => NULL,
                            'logoUrl' => 'https://ik.imagekit.io/stw2z8z0k/Photos/home-office_dvS8QVm0E_1_V8IGfYYfg.png?ik-sdk-version=javascript-1.4.3&updatedAt=1674503689221',
                            'active' => true,
                            'parentId' => NULL,
                            'priority' => 5,
                            'mainMenu' => true,
                            'smallLogoUrl' => NULL,
                            'parent' => NULL,
                            'inverseParent' =>
                                array (
                                ),
                            'items' =>
                                array (
                                ),
                        ),
                    'itemsCount' => 0,
                ),
        );

        return response()->json($data);
    }

    public function getById($id)
    {
        $data = array (
            0 =>
                array (
                    'item' =>
                        array (
                            'id' => 2,
                            'itemCode' => '001',
                            'nameRu' => 'Стол обеденный Кармен 1 раздвижной',
                            'nameKz' => NULL,
                            'nameEn' => NULL,
                            'price' => 99768,
                            'discountPercent' => 0,
                            'discountStartDate' => '2022-10-05T15:05:34.442',
                            'discountEndDate' => '2022-10-05T15:05:34.442',
                            'shopId' => 4,
                            'active' => true,
                            'categoryId' => 5,
                            'scategoryId' => 1,
                            'addedBy' => 1,
                            'stats' => ' ',
                            'object3d' => 'https://storage.googleapis.com/viled-cdn/table-carmen-iphone.usdz',
                            'objectGltf' => 'https://storage.googleapis.com/viled-cdn/table-carmen-andr.gltf',
                            'description' => NULL,
                            'addedByNavigation' => NULL,
                            'category' => NULL,
                            'scategory' => NULL,
                            'shop' => NULL,
                            'baskets' =>
                                array (
                                ),
                            'favorites' =>
                                array (
                                ),
                            'feedbacks' =>
                                array (
                                ),
                            'itemAttributes' =>
                                array (
                                ),
                            'itemPaymentTypes' =>
                                array (
                                ),
                            'itemPhotos' =>
                                array (
                                ),
                            'itemPills' =>
                                array (
                                ),
                            'orderItems' =>
                                array (
                                ),
                        ),
                    'itemPhotos' =>
                        array (
                            0 =>
                                array (
                                    'photo' =>
                                        array (
                                            'id' => 1,
                                            'url' => 'https://ik.imagekit.io/stw2z8z0k/Photos/table-carmen__1__0g5M6djhW.png?ik-sdk-version=javascript-1.4.3&updatedAt=1665923308951',
                                            'uploadedBy' => 1,
                                            'uploadedByNavigation' => NULL,
                                            'itemPhotos' =>
                                                array (
                                                ),
                                        ),
                                ),
                        ),
                    'itemAttributes' =>
                        array (
                            0 =>
                                array (
                                    'attribute' =>
                                        array (
                                            'id' => 1,
                                            'nameRu' => 'Цвет',
                                            'nameKz' => 'Tus',
                                            'nameEn' => 'Color',
                                            'isNumeric' => false,
                                            'itemAttributes' =>
                                                array (
                                                ),
                                        ),
                                    'tvalueEn' => NULL,
                                    'tvalueKz' => NULL,
                                    'tvalueRu' => 'Коричневый',
                                    'nvalue' => NULL,
                                ),
                            1 =>
                                array (
                                    'attribute' =>
                                        array (
                                            'id' => 2,
                                            'nameRu' => 'Габариты',
                                            'nameKz' => 'Gabaritter',
                                            'nameEn' => 'Size',
                                            'isNumeric' => false,
                                            'itemAttributes' =>
                                                array (
                                                ),
                                        ),
                                    'tvalueEn' => NULL,
                                    'tvalueKz' => NULL,
                                    'tvalueRu' => '200 × 74 × 90 см.',
                                    'nvalue' => NULL,
                                ),
                            2 =>
                                array (
                                    'attribute' =>
                                        array (
                                            'id' => 3,
                                            'nameRu' => 'Страна',
                                            'nameKz' => 'El',
                                            'nameEn' => 'Country',
                                            'isNumeric' => false,
                                            'itemAttributes' =>
                                                array (
                                                ),
                                        ),
                                    'tvalueEn' => NULL,
                                    'tvalueKz' => NULL,
                                    'tvalueRu' => 'Россия',
                                    'nvalue' => NULL,
                                ),
                            3 =>
                                array (
                                    'attribute' =>
                                        array (
                                            'id' => 4,
                                            'nameRu' => 'Материал',
                                            'nameKz' => 'Material',
                                            'nameEn' => 'Material',
                                            'isNumeric' => false,
                                            'itemAttributes' =>
                                                array (
                                                ),
                                        ),
                                    'tvalueEn' => NULL,
                                    'tvalueKz' => NULL,
                                    'tvalueRu' => 'Массив бука, шпон дуба, мдф',
                                    'nvalue' => NULL,
                                ),
                        ),
                    'feedbacksCount' => 3,
                ),
            1 =>
                array (
                    'item' =>
                        array (
                            'id' => 10,
                            'itemCode' => '007',
                            'nameRu' => 'Стол Талмер Груп',
                            'nameKz' => NULL,
                            'nameEn' => NULL,
                            'price' => 79000,
                            'discountPercent' => 0,
                            'discountStartDate' => '2022-10-05T15:05:34.442',
                            'discountEndDate' => '2022-10-05T15:05:34.442',
                            'shopId' => 7,
                            'active' => true,
                            'categoryId' => 5,
                            'scategoryId' => 1,
                            'addedBy' => 1,
                            'stats' => ' ',
                            'object3d' => 'https://storage.googleapis.com/viled-cdn/table_talmer_group%20(1)%20(1).usdz',
                            'objectGltf' => 'https://storage.googleapis.com/viled-cdn/table-talmer-group-android.gltf',
                            'description' => NULL,
                            'addedByNavigation' => NULL,
                            'category' => NULL,
                            'scategory' => NULL,
                            'shop' => NULL,
                            'baskets' =>
                                array (
                                ),
                            'favorites' =>
                                array (
                                ),
                            'feedbacks' =>
                                array (
                                ),
                            'itemAttributes' =>
                                array (
                                ),
                            'itemPaymentTypes' =>
                                array (
                                ),
                            'itemPhotos' =>
                                array (
                                ),
                            'itemPills' =>
                                array (
                                ),
                            'orderItems' =>
                                array (
                                ),
                        ),
                    'itemPhotos' =>
                        array (
                            0 =>
                                array (
                                    'photo' =>
                                        array (
                                            'id' => 18,
                                            'url' => 'https://ik.imagekit.io/stw2z8z0k/Photos/table-talmer-group_7UPFEiQ30.png?ik-sdk-version=javascript-1.4.3&updatedAt=1665923308850',
                                            'uploadedBy' => 1,
                                            'uploadedByNavigation' => NULL,
                                            'itemPhotos' =>
                                                array (
                                                ),
                                        ),
                                ),
                        ),
                    'itemAttributes' =>
                        array (
                            0 =>
                                array (
                                    'attribute' =>
                                        array (
                                            'id' => 1,
                                            'nameRu' => 'Цвет',
                                            'nameKz' => 'Tus',
                                            'nameEn' => 'Color',
                                            'isNumeric' => false,
                                            'itemAttributes' =>
                                                array (
                                                ),
                                        ),
                                    'tvalueEn' => NULL,
                                    'tvalueKz' => NULL,
                                    'tvalueRu' => 'Серый',
                                    'nvalue' => NULL,
                                ),
                            1 =>
                                array (
                                    'attribute' =>
                                        array (
                                            'id' => 2,
                                            'nameRu' => 'Габариты',
                                            'nameKz' => 'Gabaritter',
                                            'nameEn' => 'Size',
                                            'isNumeric' => false,
                                            'itemAttributes' =>
                                                array (
                                                ),
                                        ),
                                    'tvalueEn' => NULL,
                                    'tvalueKz' => NULL,
                                    'tvalueRu' => '75 × 110 × 70 см. ',
                                    'nvalue' => NULL,
                                ),
                            2 =>
                                array (
                                    'attribute' =>
                                        array (
                                            'id' => 3,
                                            'nameRu' => 'Страна',
                                            'nameKz' => 'El',
                                            'nameEn' => 'Country',
                                            'isNumeric' => false,
                                            'itemAttributes' =>
                                                array (
                                                ),
                                        ),
                                    'tvalueEn' => NULL,
                                    'tvalueKz' => NULL,
                                    'tvalueRu' => 'Россия',
                                    'nvalue' => NULL,
                                ),
                            3 =>
                                array (
                                    'attribute' =>
                                        array (
                                            'id' => 4,
                                            'nameRu' => 'Материал',
                                            'nameKz' => 'Material',
                                            'nameEn' => 'Material',
                                            'isNumeric' => false,
                                            'itemAttributes' =>
                                                array (
                                                ),
                                        ),
                                    'tvalueEn' => NULL,
                                    'tvalueKz' => NULL,
                                    'tvalueRu' => 'ЛДСП, металл, каленое стекло',
                                    'nvalue' => NULL,
                                ),
                        ),
                    'feedbacksCount' => 0,
                ),
            2 =>
                array (
                    'item' =>
                        array (
                            'id' => 12,
                            'itemCode' => '009',
                            'nameRu' => 'Стол Пегас Classic Drop Leaf',
                            'nameKz' => NULL,
                            'nameEn' => NULL,
                            'price' => 96300,
                            'discountPercent' => 0,
                            'discountStartDate' => '2022-10-05T15:05:34.442',
                            'discountEndDate' => '2022-10-05T15:05:34.442',
                            'shopId' => 9,
                            'active' => true,
                            'categoryId' => 5,
                            'scategoryId' => 1,
                            'addedBy' => 1,
                            'stats' => '',
                            'object3d' => 'https://storage.googleapis.com/viled-cdn/%D0%A1%D1%82%D0%BE%D0%BB%20%D0%9F%D0%B5%D0%B3%D0%B0%D1%81%20Classic%20Drop%20Leaf%20%D0%BE%D1%82%D0%BA%D1%80%D1%8B%D1%82%D1%8B%D0%B8%CC%86%20(3).usdz',
                            'objectGltf' => 'https://storage.googleapis.com/viled-cdn/table-pegas-android.gltf',
                            'description' => NULL,
                            'addedByNavigation' => NULL,
                            'category' => NULL,
                            'scategory' => NULL,
                            'shop' => NULL,
                            'baskets' =>
                                array (
                                ),
                            'favorites' =>
                                array (
                                ),
                            'feedbacks' =>
                                array (
                                ),
                            'itemAttributes' =>
                                array (
                                ),
                            'itemPaymentTypes' =>
                                array (
                                ),
                            'itemPhotos' =>
                                array (
                                ),
                            'itemPills' =>
                                array (
                                ),
                            'orderItems' =>
                                array (
                                ),
                        ),
                    'itemPhotos' =>
                        array (
                            0 =>
                                array (
                                    'photo' =>
                                        array (
                                            'id' => 20,
                                            'url' => 'https://ik.imagekit.io/stw2z8z0k/Photos/table_pegas_ht85ZToqQ.png?ik-sdk-version=javascript-1.4.3&updatedAt=1668255965820',
                                            'uploadedBy' => 1,
                                            'uploadedByNavigation' => NULL,
                                            'itemPhotos' =>
                                                array (
                                                ),
                                        ),
                                ),
                        ),
                    'itemAttributes' =>
                        array (
                            0 =>
                                array (
                                    'attribute' =>
                                        array (
                                            'id' => 1,
                                            'nameRu' => 'Цвет',
                                            'nameKz' => 'Tus',
                                            'nameEn' => 'Color',
                                            'isNumeric' => false,
                                            'itemAttributes' =>
                                                array (
                                                ),
                                        ),
                                    'tvalueEn' => NULL,
                                    'tvalueKz' => NULL,
                                    'tvalueRu' => 'Дуб',
                                    'nvalue' => NULL,
                                ),
                            1 =>
                                array (
                                    'attribute' =>
                                        array (
                                            'id' => 2,
                                            'nameRu' => 'Габариты',
                                            'nameKz' => 'Gabaritter',
                                            'nameEn' => 'Size',
                                            'isNumeric' => false,
                                            'itemAttributes' =>
                                                array (
                                                ),
                                        ),
                                    'tvalueEn' => NULL,
                                    'tvalueKz' => NULL,
                                    'tvalueRu' => '76 × 61 × 61 – 64 см. ',
                                    'nvalue' => NULL,
                                ),
                            2 =>
                                array (
                                    'attribute' =>
                                        array (
                                            'id' => 4,
                                            'nameRu' => 'Материал',
                                            'nameKz' => 'Material',
                                            'nameEn' => 'Material',
                                            'isNumeric' => false,
                                            'itemAttributes' =>
                                                array (
                                                ),
                                        ),
                                    'tvalueEn' => NULL,
                                    'tvalueKz' => NULL,
                                    'tvalueRu' => 'Массив берёзы, натуральный берёзовый шпон',
                                    'nvalue' => NULL,
                                ),
                        ),
                    'feedbacksCount' => 0,
                ),
            3 =>
                array (
                    'item' =>
                        array (
                            'id' => 14,
                            'itemCode' => '011',
                            'nameRu' => 'Стол Орион Drop Leaf Classic 100',
                            'nameKz' => NULL,
                            'nameEn' => NULL,
                            'price' => 134500,
                            'discountPercent' => 0,
                            'discountStartDate' => '2022-10-05T15:05:34.442',
                            'discountEndDate' => '2022-10-05T15:05:34.442',
                            'shopId' => 9,
                            'active' => true,
                            'categoryId' => 5,
                            'scategoryId' => 1,
                            'addedBy' => 1,
                            'stats' => '',
                            'object3d' => 'https://storage.googleapis.com/viled-cdn/table_orion_white%20(1)%20(3).usdz',
                            'objectGltf' => 'https://storage.googleapis.com/viled-cdn/table-orion-drop-leaf-classic100-android.gltf',
                            'description' => NULL,
                            'addedByNavigation' => NULL,
                            'category' => NULL,
                            'scategory' => NULL,
                            'shop' => NULL,
                            'baskets' =>
                                array (
                                ),
                            'favorites' =>
                                array (
                                ),
                            'feedbacks' =>
                                array (
                                ),
                            'itemAttributes' =>
                                array (
                                ),
                            'itemPaymentTypes' =>
                                array (
                                ),
                            'itemPhotos' =>
                                array (
                                ),
                            'itemPills' =>
                                array (
                                ),
                            'orderItems' =>
                                array (
                                ),
                        ),
                    'itemPhotos' =>
                        array (
                            0 =>
                                array (
                                    'photo' =>
                                        array (
                                            'id' => 22,
                                            'url' => 'https://ik.imagekit.io/stw2z8z0k/Photos/table_orion_jAA8boVqH.png?ik-sdk-version=javascript-1.4.3&updatedAt=1668281640275',
                                            'uploadedBy' => 1,
                                            'uploadedByNavigation' => NULL,
                                            'itemPhotos' =>
                                                array (
                                                ),
                                        ),
                                ),
                        ),
                    'itemAttributes' =>
                        array (
                        ),
                    'feedbacksCount' => 0,
                ),
            4 =>
                array (
                    'item' =>
                        array (
                            'id' => 17,
                            'itemCode' => '014',
                            'nameRu' => 'Стол Орион Classic 89',
                            'nameKz' => NULL,
                            'nameEn' => NULL,
                            'price' => 123800,
                            'discountPercent' => 0,
                            'discountStartDate' => '2022-10-05T15:05:34.442',
                            'discountEndDate' => '2022-10-05T15:05:34.442',
                            'shopId' => 9,
                            'active' => true,
                            'categoryId' => 5,
                            'scategoryId' => 1,
                            'addedBy' => 1,
                            'stats' => '',
                            'object3d' => 'https://storage.googleapis.com/viled-cdn/%D0%A1%D1%82%D0%BE%D0%BB%20%D0%9E%D1%80%D0%B8%D0%BE%D0%BD%20Classic%2089%20%D1%87%D0%B5%D1%80%D0%BD%D1%8B%D0%B5%20%D0%BD%D0%BE%D0%B6%D0%BA%D0%B8.usdz',
                            'objectGltf' => 'https://storage.googleapis.com/viled-cdn/table-orion-classic-89.gltf',
                            'description' => NULL,
                            'addedByNavigation' => NULL,
                            'category' => NULL,
                            'scategory' => NULL,
                            'shop' => NULL,
                            'baskets' =>
                                array (
                                ),
                            'favorites' =>
                                array (
                                ),
                            'feedbacks' =>
                                array (
                                ),
                            'itemAttributes' =>
                                array (
                                ),
                            'itemPaymentTypes' =>
                                array (
                                ),
                            'itemPhotos' =>
                                array (
                                ),
                            'itemPills' =>
                                array (
                                ),
                            'orderItems' =>
                                array (
                                ),
                        ),
                    'itemPhotos' =>
                        array (
                            0 =>
                                array (
                                    'photo' =>
                                        array (
                                            'id' => 25,
                                            'url' => 'https://ik.imagekit.io/stw2z8z0k/Photos/orion_classic89_Zh3lfU9FP.png?ik-sdk-version=javascript-1.4.3&updatedAt=1668370151660',
                                            'uploadedBy' => 1,
                                            'uploadedByNavigation' => NULL,
                                            'itemPhotos' =>
                                                array (
                                                ),
                                        ),
                                ),
                        ),
                    'itemAttributes' =>
                        array (
                        ),
                    'feedbacksCount' => 0,
                ),
            5 =>
                array (
                    'item' =>
                        array (
                            'id' => 18,
                            'itemCode' => '015',
                            'nameRu' => 'Стол Орион Classic Light 76',
                            'nameKz' => NULL,
                            'nameEn' => NULL,
                            'price' => 83300,
                            'discountPercent' => 0,
                            'discountStartDate' => '2022-10-05T15:05:34.442',
                            'discountEndDate' => '2022-10-05T15:05:34.442',
                            'shopId' => 9,
                            'active' => true,
                            'categoryId' => 5,
                            'scategoryId' => 1,
                            'addedBy' => 1,
                            'stats' => '',
                            'object3d' => 'https://storage.googleapis.com/viled-cdn/table-orion-classic-light76.usdz',
                            'objectGltf' => 'https://storage.googleapis.com/viled-cdn/table-orion-classic-76-orekh-android.gltf',
                            'description' => NULL,
                            'addedByNavigation' => NULL,
                            'category' => NULL,
                            'scategory' => NULL,
                            'shop' => NULL,
                            'baskets' =>
                                array (
                                ),
                            'favorites' =>
                                array (
                                ),
                            'feedbacks' =>
                                array (
                                ),
                            'itemAttributes' =>
                                array (
                                ),
                            'itemPaymentTypes' =>
                                array (
                                ),
                            'itemPhotos' =>
                                array (
                                ),
                            'itemPills' =>
                                array (
                                ),
                            'orderItems' =>
                                array (
                                ),
                        ),
                    'itemPhotos' =>
                        array (
                            0 =>
                                array (
                                    'photo' =>
                                        array (
                                            'id' => 26,
                                            'url' => 'https://ik.imagekit.io/stw2z8z0k/Photos/orion-classic-light76_EhFpqYaOG.png?ik-sdk-version=javascript-1.4.3&updatedAt=1668370927077',
                                            'uploadedBy' => 1,
                                            'uploadedByNavigation' => NULL,
                                            'itemPhotos' =>
                                                array (
                                                ),
                                        ),
                                ),
                        ),
                    'itemAttributes' =>
                        array (
                        ),
                    'feedbacksCount' => 0,
                ),
            6 =>
                array (
                    'item' =>
                        array (
                            'id' => 19,
                            'itemCode' => '016',
                            'nameRu' => 'Стол Пегас Classic 102х61',
                            'nameKz' => NULL,
                            'nameEn' => NULL,
                            'price' => 89400,
                            'discountPercent' => 0,
                            'discountStartDate' => '2022-10-05T15:05:34.442',
                            'discountEndDate' => '2022-10-05T15:05:34.442',
                            'shopId' => 9,
                            'active' => true,
                            'categoryId' => 5,
                            'scategoryId' => 1,
                            'addedBy' => 1,
                            'stats' => '',
                            'object3d' => 'https://storage.googleapis.com/viled-cdn/pegas-102x61.usdz',
                            'objectGltf' => 'https://storage.googleapis.com/viled-cdn/table-pegas-classic102x61.gltf',
                            'description' => NULL,
                            'addedByNavigation' => NULL,
                            'category' => NULL,
                            'scategory' => NULL,
                            'shop' => NULL,
                            'baskets' =>
                                array (
                                ),
                            'favorites' =>
                                array (
                                ),
                            'feedbacks' =>
                                array (
                                ),
                            'itemAttributes' =>
                                array (
                                ),
                            'itemPaymentTypes' =>
                                array (
                                ),
                            'itemPhotos' =>
                                array (
                                ),
                            'itemPills' =>
                                array (
                                ),
                            'orderItems' =>
                                array (
                                ),
                        ),
                    'itemPhotos' =>
                        array (
                            0 =>
                                array (
                                    'photo' =>
                                        array (
                                            'id' => 27,
                                            'url' => 'https://ik.imagekit.io/stw2z8z0k/Photos/pegas-classic102x61_Rs3aUK-SB.png?ik-sdk-version=javascript-1.4.3&updatedAt=1668371440270',
                                            'uploadedBy' => 1,
                                            'uploadedByNavigation' => NULL,
                                            'itemPhotos' =>
                                                array (
                                                ),
                                        ),
                                ),
                        ),
                    'itemAttributes' =>
                        array (
                        ),
                    'feedbacksCount' => 0,
                ),
            7 =>
                array (
                    'item' =>
                        array (
                            'id' => 20,
                            'itemCode' => '017',
                            'nameRu' => 'Стол Пегас Neoclassic 153',
                            'nameKz' => NULL,
                            'nameEn' => NULL,
                            'price' => 160500,
                            'discountPercent' => 0,
                            'discountStartDate' => '2022-10-05T15:05:34.442',
                            'discountEndDate' => '2022-10-05T15:05:34.442',
                            'shopId' => 9,
                            'active' => true,
                            'categoryId' => 5,
                            'scategoryId' => 1,
                            'addedBy' => 1,
                            'stats' => '',
                            'object3d' => 'https://storage.googleapis.com/viled-cdn/Pegas%20Neoclassic%20153%20new%20(1).usdz',
                            'objectGltf' => 'https://storage.googleapis.com/viled-cdn/table-pegas-neoclassic153.gltf',
                            'description' => NULL,
                            'addedByNavigation' => NULL,
                            'category' => NULL,
                            'scategory' => NULL,
                            'shop' => NULL,
                            'baskets' =>
                                array (
                                ),
                            'favorites' =>
                                array (
                                ),
                            'feedbacks' =>
                                array (
                                ),
                            'itemAttributes' =>
                                array (
                                ),
                            'itemPaymentTypes' =>
                                array (
                                ),
                            'itemPhotos' =>
                                array (
                                ),
                            'itemPills' =>
                                array (
                                ),
                            'orderItems' =>
                                array (
                                ),
                        ),
                    'itemPhotos' =>
                        array (
                            0 =>
                                array (
                                    'photo' =>
                                        array (
                                            'id' => 28,
                                            'url' => 'https://ik.imagekit.io/stw2z8z0k/Photos/pegas-neoclassic-153_dSkPXcXJz.png?ik-sdk-version=javascript-1.4.3&updatedAt=1668372499970',
                                            'uploadedBy' => 1,
                                            'uploadedByNavigation' => NULL,
                                            'itemPhotos' =>
                                                array (
                                                ),
                                        ),
                                ),
                        ),
                    'itemAttributes' =>
                        array (
                        ),
                    'feedbacksCount' => 0,
                ),
            8 =>
                array (
                    'item' =>
                        array (
                            'id' => 21,
                            'itemCode' => '018',
                            'nameRu' => 'Стол Орион Сlassic 100',
                            'nameKz' => NULL,
                            'nameEn' => NULL,
                            'price' => 133000,
                            'discountPercent' => 0,
                            'discountStartDate' => '2022-10-05T15:05:34.442',
                            'discountEndDate' => '2022-10-05T15:05:34.442',
                            'shopId' => 9,
                            'active' => true,
                            'categoryId' => 5,
                            'scategoryId' => 1,
                            'addedBy' => 1,
                            'stats' => '',
                            'object3d' => 'https://storage.googleapis.com/viled-cdn/%D0%A1%D1%82%D0%BE%D0%BB%20%D0%9E%D1%80%D0%B8%D0%BE%D0%BD%20%D0%A1lassic%20100%20%D0%B4%D0%B5%D1%80%D0%B5%D0%B2%D0%BE.usdz',
                            'objectGltf' => 'https://storage.googleapis.com/viled-cdn/table-orion-classic-100-wooden-f.gltf',
                            'description' => NULL,
                            'addedByNavigation' => NULL,
                            'category' => NULL,
                            'scategory' => NULL,
                            'shop' => NULL,
                            'baskets' =>
                                array (
                                ),
                            'favorites' =>
                                array (
                                ),
                            'feedbacks' =>
                                array (
                                ),
                            'itemAttributes' =>
                                array (
                                ),
                            'itemPaymentTypes' =>
                                array (
                                ),
                            'itemPhotos' =>
                                array (
                                ),
                            'itemPills' =>
                                array (
                                ),
                            'orderItems' =>
                                array (
                                ),
                        ),
                    'itemPhotos' =>
                        array (
                            0 =>
                                array (
                                    'photo' =>
                                        array (
                                            'id' => 29,
                                            'url' => 'https://ik.imagekit.io/stw2z8z0k/Photos/stol-orion-neoclassic-1_pr648_1_1_6r4pGg0jv.png?ik-sdk-version=javascript-1.4.3&updatedAt=1671225465424',
                                            'uploadedBy' => 1,
                                            'uploadedByNavigation' => NULL,
                                            'itemPhotos' =>
                                                array (
                                                ),
                                        ),
                                ),
                        ),
                    'itemAttributes' =>
                        array (
                        ),
                    'feedbacksCount' => 0,
                ),
            9 =>
                array (
                    'item' =>
                        array (
                            'id' => 22,
                            'itemCode' => '019',
                            'nameRu' => 'Стол Пегас Classic Plus раздвижной',
                            'nameKz' => NULL,
                            'nameEn' => NULL,
                            'price' => 193300,
                            'discountPercent' => 0,
                            'discountStartDate' => '2022-10-05T15:05:34.442',
                            'discountEndDate' => '2022-10-05T15:05:34.442',
                            'shopId' => 9,
                            'active' => true,
                            'categoryId' => 5,
                            'scategoryId' => 1,
                            'addedBy' => 1,
                            'stats' => '',
                            'object3d' => 'https://storage.googleapis.com/viled-cdn/table-pegas-classic-plus.usdz',
                            'objectGltf' => 'https://storage.googleapis.com/viled-cdn/pegas-classicplus-120.gltf',
                            'description' => NULL,
                            'addedByNavigation' => NULL,
                            'category' => NULL,
                            'scategory' => NULL,
                            'shop' => NULL,
                            'baskets' =>
                                array (
                                ),
                            'favorites' =>
                                array (
                                ),
                            'feedbacks' =>
                                array (
                                ),
                            'itemAttributes' =>
                                array (
                                ),
                            'itemPaymentTypes' =>
                                array (
                                ),
                            'itemPhotos' =>
                                array (
                                ),
                            'itemPills' =>
                                array (
                                ),
                            'orderItems' =>
                                array (
                                ),
                        ),
                    'itemPhotos' =>
                        array (
                            0 =>
                                array (
                                    'photo' =>
                                        array (
                                            'id' => 31,
                                            'url' => 'https://ik.imagekit.io/stw2z8z0k/Photos/stol-pegas-classic-plus-1_pr582_1_l3hcYb-Ri.png?ik-sdk-version=javascript-1.4.3&updatedAt=1669144715701',
                                            'uploadedBy' => 1,
                                            'uploadedByNavigation' => NULL,
                                            'itemPhotos' =>
                                                array (
                                                ),
                                        ),
                                ),
                        ),
                    'itemAttributes' =>
                        array (
                        ),
                    'feedbacksCount' => 0,
                ),
            10 =>
                array (
                    'item' =>
                        array (
                            'id' => 23,
                            'itemCode' => '020',
                            'nameRu' => 'Стол Антила Classic 120',
                            'nameKz' => NULL,
                            'nameEn' => NULL,
                            'price' => 146000,
                            'discountPercent' => 0,
                            'discountStartDate' => '2022-10-05T15:05:34.442',
                            'discountEndDate' => '2022-10-05T15:05:34.442',
                            'shopId' => 9,
                            'active' => true,
                            'categoryId' => 5,
                            'scategoryId' => 1,
                            'addedBy' => 1,
                            'stats' => '',
                            'object3d' => 'https://storage.googleapis.com/viled-cdn/antila-classic-120.usdz',
                            'objectGltf' => 'https://storage.googleapis.com/viled-cdn/antila-classic-120.gltf',
                            'description' => NULL,
                            'addedByNavigation' => NULL,
                            'category' => NULL,
                            'scategory' => NULL,
                            'shop' => NULL,
                            'baskets' =>
                                array (
                                ),
                            'favorites' =>
                                array (
                                ),
                            'feedbacks' =>
                                array (
                                ),
                            'itemAttributes' =>
                                array (
                                ),
                            'itemPaymentTypes' =>
                                array (
                                ),
                            'itemPhotos' =>
                                array (
                                ),
                            'itemPills' =>
                                array (
                                ),
                            'orderItems' =>
                                array (
                                ),
                        ),
                    'itemPhotos' =>
                        array (
                            0 =>
                                array (
                                    'photo' =>
                                        array (
                                            'id' => 32,
                                            'url' => 'https://ik.imagekit.io/stw2z8z0k/Photos/stol-antila-classic-120-_pr770_1_XC2H2ssHZ.png?ik-sdk-version=javascript-1.4.3&updatedAt=1669145216704',
                                            'uploadedBy' => 1,
                                            'uploadedByNavigation' => NULL,
                                            'itemPhotos' =>
                                                array (
                                                ),
                                        ),
                                ),
                        ),
                    'itemAttributes' =>
                        array (
                        ),
                    'feedbacksCount' => 0,
                ),
            11 =>
                array (
                    'item' =>
                        array (
                            'id' => 24,
                            'itemCode' => '021',
                            'nameRu' => 'Стол Персей Plus 130 раздвижной',
                            'nameKz' => NULL,
                            'nameEn' => NULL,
                            'price' => 146000,
                            'discountPercent' => 0,
                            'discountStartDate' => '2022-10-05T15:05:34.442',
                            'discountEndDate' => '2022-10-05T15:05:34.442',
                            'shopId' => 9,
                            'active' => true,
                            'categoryId' => 5,
                            'scategoryId' => 1,
                            'addedBy' => 1,
                            'stats' => '',
                            'object3d' => 'https://storage.googleapis.com/viled-cdn/persei-plus130.usdz',
                            'objectGltf' => 'https://storage.googleapis.com/viled-cdn/persei-plus130.gltf',
                            'description' => NULL,
                            'addedByNavigation' => NULL,
                            'category' => NULL,
                            'scategory' => NULL,
                            'shop' => NULL,
                            'baskets' =>
                                array (
                                ),
                            'favorites' =>
                                array (
                                ),
                            'feedbacks' =>
                                array (
                                ),
                            'itemAttributes' =>
                                array (
                                ),
                            'itemPaymentTypes' =>
                                array (
                                ),
                            'itemPhotos' =>
                                array (
                                ),
                            'itemPills' =>
                                array (
                                ),
                            'orderItems' =>
                                array (
                                ),
                        ),
                    'itemPhotos' =>
                        array (
                            0 =>
                                array (
                                    'photo' =>
                                        array (
                                            'id' => 33,
                                            'url' => 'https://ik.imagekit.io/stw2z8z0k/Photos/stol-persej-plus-130_pr525_1_1_NLTaGEOtI.png?ik-sdk-version=javascript-1.4.3&updatedAt=1669145925815',
                                            'uploadedBy' => 1,
                                            'uploadedByNavigation' => NULL,
                                            'itemPhotos' =>
                                                array (
                                                ),
                                        ),
                                ),
                        ),
                    'itemAttributes' =>
                        array (
                        ),
                    'feedbacksCount' => 0,
                ),
            12 =>
                array (
                    'item' =>
                        array (
                            'id' => 25,
                            'itemCode' => '022',
                            'nameRu' => 'Стол Пегас Neoclassic Plus 120 раздвижной',
                            'nameKz' => NULL,
                            'nameEn' => NULL,
                            'price' => 148300,
                            'discountPercent' => 0,
                            'discountStartDate' => '2022-10-05T15:05:34.442',
                            'discountEndDate' => '2022-10-05T15:05:34.442',
                            'shopId' => 9,
                            'active' => true,
                            'categoryId' => 5,
                            'scategoryId' => 1,
                            'addedBy' => 1,
                            'stats' => '',
                            'object3d' => 'https://storage.googleapis.com/viled-cdn/table-pegas-neoclassic-120.usdz',
                            'objectGltf' => 'https://storage.googleapis.com/viled-cdn/table-pegas-neoclassic-plus.gltf',
                            'description' => NULL,
                            'addedByNavigation' => NULL,
                            'category' => NULL,
                            'scategory' => NULL,
                            'shop' => NULL,
                            'baskets' =>
                                array (
                                ),
                            'favorites' =>
                                array (
                                ),
                            'feedbacks' =>
                                array (
                                ),
                            'itemAttributes' =>
                                array (
                                ),
                            'itemPaymentTypes' =>
                                array (
                                ),
                            'itemPhotos' =>
                                array (
                                ),
                            'itemPills' =>
                                array (
                                ),
                            'orderItems' =>
                                array (
                                ),
                        ),
                    'itemPhotos' =>
                        array (
                            0 =>
                                array (
                                    'photo' =>
                                        array (
                                            'id' => 34,
                                            'url' => 'https://ik.imagekit.io/stw2z8z0k/Photos/table-pegas-neoclassic-plus-120_RW115XWdR.png?ik-sdk-version=javascript-1.4.3&updatedAt=1669146427763',
                                            'uploadedBy' => 1,
                                            'uploadedByNavigation' => NULL,
                                            'itemPhotos' =>
                                                array (
                                                ),
                                        ),
                                ),
                        ),
                    'itemAttributes' =>
                        array (
                        ),
                    'feedbacksCount' => 0,
                ),
            13 =>
                array (
                    'item' =>
                        array (
                            'id' => 27,
                            'itemCode' => '024',
                            'nameRu' => 'Комплект из двух стульев Вега с мягким сиденьем',
                            'nameKz' => NULL,
                            'nameEn' => NULL,
                            'price' => 68000,
                            'discountPercent' => 0,
                            'discountStartDate' => '2022-10-05T15:05:34.442',
                            'discountEndDate' => '2022-10-05T15:05:34.442',
                            'shopId' => 9,
                            'active' => true,
                            'categoryId' => 5,
                            'scategoryId' => 1,
                            'addedBy' => 1,
                            'stats' => '',
                            'object3d' => 'https://storage.googleapis.com/viled-cdn/chair-vega.usdz',
                            'objectGltf' => 'https://storage.googleapis.com/viled-cdn/vega-chair-final.gltf',
                            'description' => NULL,
                            'addedByNavigation' => NULL,
                            'category' => NULL,
                            'scategory' => NULL,
                            'shop' => NULL,
                            'baskets' =>
                                array (
                                ),
                            'favorites' =>
                                array (
                                ),
                            'feedbacks' =>
                                array (
                                ),
                            'itemAttributes' =>
                                array (
                                ),
                            'itemPaymentTypes' =>
                                array (
                                ),
                            'itemPhotos' =>
                                array (
                                ),
                            'itemPills' =>
                                array (
                                ),
                            'orderItems' =>
                                array (
                                ),
                        ),
                    'itemPhotos' =>
                        array (
                            0 =>
                                array (
                                    'photo' =>
                                        array (
                                            'id' => 47,
                                            'url' => 'https://ik.imagekit.io/stw2z8z0k/Photos/vega_0fi5OOZiD.png?ik-sdk-version=javascript-1.4.3&updatedAt=1672082171923',
                                            'uploadedBy' => 1,
                                            'uploadedByNavigation' => NULL,
                                            'itemPhotos' =>
                                                array (
                                                ),
                                        ),
                                ),
                        ),
                    'itemAttributes' =>
                        array (
                        ),
                    'feedbacksCount' => 0,
                ),
            14 =>
                array (
                    'item' =>
                        array (
                            'id' => 53,
                            'itemCode' => '053',
                            'nameRu' => 'Комплект из двух табуретов Авиор',
                            'nameKz' => NULL,
                            'nameEn' => NULL,
                            'price' => 44400,
                            'discountPercent' => 0,
                            'discountStartDate' => '2022-10-05T15:05:34.442',
                            'discountEndDate' => '2022-10-05T15:05:34.442',
                            'shopId' => 9,
                            'active' => true,
                            'categoryId' => 5,
                            'scategoryId' => 1,
                            'addedBy' => 1,
                            'stats' => '',
                            'object3d' => 'https://storage.googleapis.com/viled-cdn/%D0%9A%D0%BE%D0%BC%D0%BF%D0%BB%D0%B5%D0%BA%D1%82%20%D0%B8%D0%B7%20%D0%B4%D0%B2%D1%83%D1%85%20%D1%82%D0%B0%D0%B1%D1%83%D1%80%D0%B5%D1%82%D0%BE%D0%B2%20%D0%90%D0%B2%D0%B8%D0%BE%D1%80.usdz',
                            'objectGltf' => 'https://storage.googleapis.com/viled-cdn/%D0%9A%D0%BE%D0%BC%D0%BF%D0%BB%D0%B5%D0%BA%D1%82%20%D0%B8%D0%B7%20%D0%B4%D0%B2%D1%83%D1%85%20%D1%82%D0%B0%D0%B1%D1%83%D1%80%D0%B5%D1%82%D0%BE%D0%B2%20%D0%90%D0%B2%D0%B8%D0%BE%D1%80.gltf',
                            'description' => NULL,
                            'addedByNavigation' => NULL,
                            'category' => NULL,
                            'scategory' => NULL,
                            'shop' => NULL,
                            'baskets' =>
                                array (
                                ),
                            'favorites' =>
                                array (
                                ),
                            'feedbacks' =>
                                array (
                                ),
                            'itemAttributes' =>
                                array (
                                ),
                            'itemPaymentTypes' =>
                                array (
                                ),
                            'itemPhotos' =>
                                array (
                                ),
                            'itemPills' =>
                                array (
                                ),
                            'orderItems' =>
                                array (
                                ),
                        ),
                    'itemPhotos' =>
                        array (
                            0 =>
                                array (
                                    'photo' =>
                                        array (
                                            'id' => 57,
                                            'url' => 'https://ik.imagekit.io/stw2z8z0k/Photos/avior-1_99-fO6lZsB.png?ik-sdk-version=javascript-1.4.3&updatedAt=1674064036183',
                                            'uploadedBy' => 1,
                                            'uploadedByNavigation' => NULL,
                                            'itemPhotos' =>
                                                array (
                                                ),
                                        ),
                                ),
                        ),
                    'itemAttributes' =>
                        array (
                        ),
                    'feedbacksCount' => 0,
                ),
            15 =>
                array (
                    'item' =>
                        array (
                            'id' => 54,
                            'itemCode' => '054',
                            'nameRu' => 'Комплект из двух стульев Каф Жаккард Блю',
                            'nameKz' => NULL,
                            'nameEn' => NULL,
                            'price' => 107000,
                            'discountPercent' => 0,
                            'discountStartDate' => '2022-10-05T15:05:34.442',
                            'discountEndDate' => '2022-10-05T15:05:34.442',
                            'shopId' => 9,
                            'active' => true,
                            'categoryId' => 5,
                            'scategoryId' => 1,
                            'addedBy' => 1,
                            'stats' => '',
                            'object3d' => 'https://storage.googleapis.com/viled-cdn/%D0%9A%D0%BE%D0%BC%D0%BF%D0%BB%D0%B5%D0%BA%D1%82%20%D0%B8%D0%B7%20%D0%B4%D0%B2%D1%83%D1%85%20%D1%81%D1%82%D1%83%D0%BB%D1%8C%D0%B5%D0%B2%20%D0%9A%D0%B0%D1%84%20%D0%91%D0%B5%D0%BB%D1%8B%D0%B8%CC%86%20%D0%96%D0%B0%D0%BA%D0%BA%D0%B0%D1%80%D0%B4%20%D0%91%D0%BB%D1%8E%20%D0%BD%D0%BE%D0%B6%D0%BA%D0%B8%20%D0%B1%D0%B5%D0%BB%D1%8B%D0%B8%CC%86.usdz',
                            'objectGltf' => 'https://storage.googleapis.com/viled-cdn/%D0%9A%D0%BE%D0%BC%D0%BF%D0%BB%D0%B5%D0%BA%D1%82%20%D0%B8%D0%B7%20%D0%B4%D0%B2%D1%83%D1%85%20%D1%81%D1%82%D1%83%D0%BB%D1%8C%D0%B5%D0%B2%20%D0%9A%D0%B0%D1%84%20%D0%91%D0%B5%D0%BB%D1%8B%D0%B8%CC%86%20%D0%96%D0%B0%D0%BA%D0%BA%D0%B0%D1%80%D0%B4%20%D0%91%D0%BB%D1%8E%20%D0%BD%D0%BE%D0%B6%D0%BA%D0%B8%20%D0%B1%D0%B5%D0%BB%D1%8B%D0%B8%CC%86.gltf',
                            'description' => NULL,
                            'addedByNavigation' => NULL,
                            'category' => NULL,
                            'scategory' => NULL,
                            'shop' => NULL,
                            'baskets' =>
                                array (
                                ),
                            'favorites' =>
                                array (
                                ),
                            'feedbacks' =>
                                array (
                                ),
                            'itemAttributes' =>
                                array (
                                ),
                            'itemPaymentTypes' =>
                                array (
                                ),
                            'itemPhotos' =>
                                array (
                                ),
                            'itemPills' =>
                                array (
                                ),
                            'orderItems' =>
                                array (
                                ),
                        ),
                    'itemPhotos' =>
                        array (
                            0 =>
                                array (
                                    'photo' =>
                                        array (
                                            'id' => 58,
                                            'url' => 'https://ik.imagekit.io/stw2z8z0k/Photos/jacard-white_Pj8L0tNXV.png?ik-sdk-version=javascript-1.4.3&updatedAt=1674064311607',
                                            'uploadedBy' => 1,
                                            'uploadedByNavigation' => NULL,
                                            'itemPhotos' =>
                                                array (
                                                ),
                                        ),
                                ),
                        ),
                    'itemAttributes' =>
                        array (
                        ),
                    'feedbacksCount' => 0,
                ),
            16 =>
                array (
                    'item' =>
                        array (
                            'id' => 55,
                            'itemCode' => '055',
                            'nameRu' => 'Комплект из двух стульев Ран, Дуб Latte',
                            'nameKz' => NULL,
                            'nameEn' => NULL,
                            'price' => 81000,
                            'discountPercent' => 0,
                            'discountStartDate' => '2022-10-05T15:05:34.442',
                            'discountEndDate' => '2022-10-05T15:05:34.442',
                            'shopId' => 9,
                            'active' => true,
                            'categoryId' => 5,
                            'scategoryId' => 1,
                            'addedBy' => 1,
                            'stats' => '',
                            'object3d' => 'https://storage.googleapis.com/viled-cdn/%D0%9A%D0%BE%D0%BC%D0%BF%D0%BB%D0%B5%D0%BA%D1%82%20%D0%B8%D0%B7%20%D0%B4%D0%B2%D1%83%D1%85%20%D1%81%D1%82%D1%83%D0%BB%D1%8C%D0%B5%D0%B2%20%D0%A0%D0%B0%D0%BD%2C%20%D0%94%D1%83%D0%B1%20Latte.usdz',
                            'objectGltf' => 'https://storage.googleapis.com/viled-cdn/%D0%9A%D0%BE%D0%BC%D0%BF%D0%BB%D0%B5%D0%BA%D1%82%20%D0%B8%D0%B7%20%D0%B4%D0%B2%D1%83%D1%85%20%D1%81%D1%82%D1%83%D0%BB%D1%8C%D0%B5%D0%B2%20%D0%A0%D0%B0%D0%BD%2C%20%D0%94%D1%83%D0%B1%20Latte.gltf',
                            'description' => NULL,
                            'addedByNavigation' => NULL,
                            'category' => NULL,
                            'scategory' => NULL,
                            'shop' => NULL,
                            'baskets' =>
                                array (
                                ),
                            'favorites' =>
                                array (
                                ),
                            'feedbacks' =>
                                array (
                                ),
                            'itemAttributes' =>
                                array (
                                ),
                            'itemPaymentTypes' =>
                                array (
                                ),
                            'itemPhotos' =>
                                array (
                                ),
                            'itemPills' =>
                                array (
                                ),
                            'orderItems' =>
                                array (
                                ),
                        ),
                    'itemPhotos' =>
                        array (
                            0 =>
                                array (
                                    'photo' =>
                                        array (
                                            'id' => 59,
                                            'url' => 'https://ik.imagekit.io/stw2z8z0k/Photos/ran_WoE9qUwgC.png?ik-sdk-version=javascript-1.4.3&updatedAt=1674064960198',
                                            'uploadedBy' => 1,
                                            'uploadedByNavigation' => NULL,
                                            'itemPhotos' =>
                                                array (
                                                ),
                                        ),
                                ),
                        ),
                    'itemAttributes' =>
                        array (
                        ),
                    'feedbacksCount' => 0,
                ),
            17 =>
                array (
                    'item' =>
                        array (
                            'id' => 56,
                            'itemCode' => '056',
                            'nameRu' => 'Комплект из двух стульев Кейд',
                            'nameKz' => NULL,
                            'nameEn' => NULL,
                            'price' => 80400,
                            'discountPercent' => 0,
                            'discountStartDate' => '2022-10-05T15:05:34.442',
                            'discountEndDate' => '2022-10-05T15:05:34.442',
                            'shopId' => 9,
                            'active' => true,
                            'categoryId' => 5,
                            'scategoryId' => 1,
                            'addedBy' => 1,
                            'stats' => '',
                            'object3d' => 'https://storage.googleapis.com/viled-cdn/%D0%9A%D0%BE%D0%BC%D0%BF%D0%BB%D0%B5%D0%BA%D1%82%20%D0%B8%D0%B7%20%D0%B4%D0%B2%D1%83%D1%85%20%D1%81%D1%82%D1%83%D0%BB%D1%8C%D0%B5%D0%B2%20%D0%9A%D0%B5%D0%B8%CC%86%D0%B4.usdz',
                            'objectGltf' => 'https://storage.googleapis.com/viled-cdn/%D0%9A%D0%BE%D0%BC%D0%BF%D0%BB%D0%B5%D0%BA%D1%82%20%D0%B8%D0%B7%20%D0%B4%D0%B2%D1%83%D1%85%20%D1%81%D1%82%D1%83%D0%BB%D1%8C%D0%B5%D0%B2%20%D0%9A%D0%B5%D0%B8%CC%86%D0%B4.gltf',
                            'description' => NULL,
                            'addedByNavigation' => NULL,
                            'category' => NULL,
                            'scategory' => NULL,
                            'shop' => NULL,
                            'baskets' =>
                                array (
                                ),
                            'favorites' =>
                                array (
                                ),
                            'feedbacks' =>
                                array (
                                ),
                            'itemAttributes' =>
                                array (
                                ),
                            'itemPaymentTypes' =>
                                array (
                                ),
                            'itemPhotos' =>
                                array (
                                ),
                            'itemPills' =>
                                array (
                                ),
                            'orderItems' =>
                                array (
                                ),
                        ),
                    'itemPhotos' =>
                        array (
                            0 =>
                                array (
                                    'photo' =>
                                        array (
                                            'id' => 60,
                                            'url' => 'https://ik.imagekit.io/stw2z8z0k/Photos/kade_1-removebg_stTpSg6S0.png?ik-sdk-version=javascript-1.4.3&updatedAt=1674065244209',
                                            'uploadedBy' => 1,
                                            'uploadedByNavigation' => NULL,
                                            'itemPhotos' =>
                                                array (
                                                ),
                                        ),
                                ),
                        ),
                    'itemAttributes' =>
                        array (
                        ),
                    'feedbacksCount' => 0,
                ),
            18 =>
                array (
                    'item' =>
                        array (
                            'id' => 57,
                            'itemCode' => '057',
                            'nameRu' => 'Комплект из двух стульев Вега с жестким сиденьем',
                            'nameKz' => NULL,
                            'nameEn' => NULL,
                            'price' => 71200,
                            'discountPercent' => 0,
                            'discountStartDate' => '2022-10-05T15:05:34.442',
                            'discountEndDate' => '2022-10-05T15:05:34.442',
                            'shopId' => 9,
                            'active' => true,
                            'categoryId' => 5,
                            'scategoryId' => 1,
                            'addedBy' => 1,
                            'stats' => '',
                            'object3d' => 'https://storage.googleapis.com/viled-cdn/%D0%9A%D0%BE%D0%BC%D0%BF%D0%BB%D0%B5%D0%BA%D1%82%20%D0%B8%D0%B7%20%D0%B4%D0%B2%D1%83%D1%85%20%D1%81%D1%82%D1%83%D0%BB%D1%8C%D0%B5%D0%B2%20%D0%92%D0%B5%D0%B3%D0%B0%20%D1%81%20%D0%B6%D0%B5%D1%81%D1%82%D0%BA%D0%B8%D0%BC%20%D1%81%D0%B8%D0%B4%D0%B5%D0%BD%D1%8C%D0%B5%D0%BC.usdz',
                            'objectGltf' => 'https://storage.googleapis.com/viled-cdn/%D0%9A%D0%BE%D0%BC%D0%BF%D0%BB%D0%B5%D0%BA%D1%82%20%D0%B8%D0%B7%20%D0%B4%D0%B2%D1%83%D1%85%20%D1%81%D1%82%D1%83%D0%BB%D1%8C%D0%B5%D0%B2%20%D0%92%D0%B5%D0%B3%D0%B0%20%D1%81%20%D0%B6%D0%B5%D1%81%D1%82%D0%BA%D0%B8%D0%BC%20%D1%81%D0%B8%D0%B4%D0%B5%D0%BD%D1%8C%D0%B5%D0%BC.gltf',
                            'description' => NULL,
                            'addedByNavigation' => NULL,
                            'category' => NULL,
                            'scategory' => NULL,
                            'shop' => NULL,
                            'baskets' =>
                                array (
                                ),
                            'favorites' =>
                                array (
                                ),
                            'feedbacks' =>
                                array (
                                ),
                            'itemAttributes' =>
                                array (
                                ),
                            'itemPaymentTypes' =>
                                array (
                                ),
                            'itemPhotos' =>
                                array (
                                ),
                            'itemPills' =>
                                array (
                                ),
                            'orderItems' =>
                                array (
                                ),
                        ),
                    'itemPhotos' =>
                        array (
                            0 =>
                                array (
                                    'photo' =>
                                        array (
                                            'id' => 61,
                                            'url' => 'https://ik.imagekit.io/stw2z8z0k/Photos/image_9_n5kuvF389p.png?ik-sdk-version=javascript-1.4.3&updatedAt=1674066840923',
                                            'uploadedBy' => 1,
                                            'uploadedByNavigation' => NULL,
                                            'itemPhotos' =>
                                                array (
                                                ),
                                        ),
                                ),
                        ),
                    'itemAttributes' =>
                        array (
                        ),
                    'feedbacksCount' => 0,
                ),
            19 =>
                array (
                    'item' =>
                        array (
                            'id' => 59,
                            'itemCode' => '059',
                            'nameRu' => 'Стол обеденный Пегас Classic 76х76',
                            'nameKz' => NULL,
                            'nameEn' => NULL,
                            'price' => 88700,
                            'discountPercent' => 0,
                            'discountStartDate' => '2022-10-05T15:05:34.442',
                            'discountEndDate' => '2022-10-05T15:05:34.442',
                            'shopId' => 9,
                            'active' => true,
                            'categoryId' => 5,
                            'scategoryId' => 1,
                            'addedBy' => 1,
                            'stats' => '',
                            'object3d' => 'https://storage.googleapis.com/viled-cdn/%D0%A1%D1%82%D0%BE%D0%BB%20%D0%BE%D0%B1%D0%B5%D0%B4%D0%B5%D0%BD%D0%BD%D1%8B%D0%B8%CC%86%20%D0%9F%D0%B5%D0%B3%D0%B0%D1%81%20Classic%2076%D1%8576%20(1).usdz',
                            'objectGltf' => 'https://storage.googleapis.com/viled-cdn/%D0%A1%D1%82%D0%BE%D0%BB%20%D0%BE%D0%B1%D0%B5%D0%B4%D0%B5%D0%BD%D0%BD%D1%8B%D0%B8%CC%86%20%D0%9F%D0%B5%D0%B3%D0%B0%D1%81%20Classic%2076%D1%8576.gltf',
                            'description' => NULL,
                            'addedByNavigation' => NULL,
                            'category' => NULL,
                            'scategory' => NULL,
                            'shop' => NULL,
                            'baskets' =>
                                array (
                                ),
                            'favorites' =>
                                array (
                                ),
                            'feedbacks' =>
                                array (
                                ),
                            'itemAttributes' =>
                                array (
                                ),
                            'itemPaymentTypes' =>
                                array (
                                ),
                            'itemPhotos' =>
                                array (
                                ),
                            'itemPills' =>
                                array (
                                ),
                            'orderItems' =>
                                array (
                                ),
                        ),
                    'itemPhotos' =>
                        array (
                            0 =>
                                array (
                                    'photo' =>
                                        array (
                                            'id' => 63,
                                            'url' => 'https://ik.imagekit.io/stw2z8z0k/Photos/kuhonnyi-stol-pegas-classic-76-dub-1-740x540_1_SQX0FbmVc.png?ik-sdk-version=javascript-1.4.3&updatedAt=1674067245810',
                                            'uploadedBy' => 1,
                                            'uploadedByNavigation' => NULL,
                                            'itemPhotos' =>
                                                array (
                                                ),
                                        ),
                                ),
                        ),
                    'itemAttributes' =>
                        array (
                        ),
                    'feedbacksCount' => 0,
                ),
        );

        return response()->json($data);
    }
}
