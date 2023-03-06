<?php
namespace App\Http\Controllers\Api\v1;
class MenuController
{
    public function getMenu()
    {
        $data = array (
            'categories' =>
                array (
                    0 =>
                        array (
                            'id' => 1,
                            'nameRu' => 'Диваны',
                            'nameEn' => NULL,
                            'nameKz' => NULL,
                            'logoUrl' => 'https://ik.imagekit.io/stw2z8z0k/Categories/sofas_tdQNdwu0x.png?ik-sdk-version=javascript-1.4.3&updatedAt=1665943414846',
                            'active' => true,
                            'parentId' => NULL,
                            'priority' => 1,
                            'mainMenu' => true,
                            'smallLogoUrl' => 'https://ik.imagekit.io/stw2z8z0k/Categories/Small_Categories/sofas-small_9eAb8MfPB.png?ik-sdk-version=javascript-1.4.3&updatedAt=1665947486249',
                            'parent' => NULL,
                            'inverseParent' =>
                                array (
                                ),
                            'items' =>
                                array (
                                ),
                        ),
                    1 =>
                        array (
                            'id' => 3,
                            'nameRu' => 'Кровати и матрасы',
                            'nameEn' => NULL,
                            'nameKz' => NULL,
                            'logoUrl' => 'https://ik.imagekit.io/stw2z8z0k/Categories/beds_YQBw3niHL.png?ik-sdk-version=javascript-1.4.3&updatedAt=1665943413436',
                            'active' => true,
                            'parentId' => NULL,
                            'priority' => 1,
                            'mainMenu' => true,
                            'smallLogoUrl' => 'https://ik.imagekit.io/stw2z8z0k/Categories/Small_Categories/beds_o2OB6Pjno.png?ik-sdk-version=javascript-1.4.3&updatedAt=1665947711649',
                            'parent' => NULL,
                            'inverseParent' =>
                                array (
                                ),
                            'items' =>
                                array (
                                ),
                        ),
                    2 =>
                        array (
                            'id' => 7,
                            'nameRu' => 'Шкафы и стеллажи',
                            'nameEn' => NULL,
                            'nameKz' => NULL,
                            'logoUrl' => 'https://ik.imagekit.io/stw2z8z0k/Categories/closets_UZHmWggEL.png?ik-sdk-version=javascript-1.4.3&updatedAt=1665943414295',
                            'active' => true,
                            'parentId' => NULL,
                            'priority' => 1,
                            'mainMenu' => true,
                            'smallLogoUrl' => 'https://ik.imagekit.io/stw2z8z0k/Categories/Small_Categories/closets_Q1b2vInfLB.png?ik-sdk-version=javascript-1.4.3&updatedAt=1665947936466',
                            'parent' => NULL,
                            'inverseParent' =>
                                array (
                                ),
                            'items' =>
                                array (
                                ),
                        ),
                    3 =>
                        array (
                            'id' => 6,
                            'nameRu' => 'Комоды и тумбы',
                            'nameEn' => NULL,
                            'nameKz' => NULL,
                            'logoUrl' => 'https://ik.imagekit.io/stw2z8z0k/Categories/comods_CY82jgexi.png?ik-sdk-version=javascript-1.4.3&updatedAt=1665943414541',
                            'active' => true,
                            'parentId' => NULL,
                            'priority' => 1,
                            'mainMenu' => true,
                            'smallLogoUrl' => 'https://ik.imagekit.io/stw2z8z0k/Categories/Small_Categories/comods_j7B32jzWE.png?ik-sdk-version=javascript-1.4.3&updatedAt=1665947936807',
                            'parent' => NULL,
                            'inverseParent' =>
                                array (
                                ),
                            'items' =>
                                array (
                                ),
                        ),
                    4 =>
                        array (
                            'id' => 5,
                            'nameRu' => 'Столы и стулья',
                            'nameEn' => NULL,
                            'nameKz' => NULL,
                            'logoUrl' => 'https://ik.imagekit.io/stw2z8z0k/Categories/tables_cdNlkZbCU.png?ik-sdk-version=javascript-1.4.3&updatedAt=1665943413958',
                            'active' => true,
                            'parentId' => NULL,
                            'priority' => 1,
                            'mainMenu' => true,
                            'smallLogoUrl' => 'https://ik.imagekit.io/stw2z8z0k/Categories/Small_Categories/tables_wkkRJGuqy.png?ik-sdk-version=javascript-1.4.3&updatedAt=1665947936656',
                            'parent' => NULL,
                            'inverseParent' =>
                                array (
                                ),
                            'items' =>
                                array (
                                ),
                        ),
                    5 =>
                        array (
                            'id' => 2,
                            'nameRu' => 'Кресла',
                            'nameEn' => NULL,
                            'nameKz' => NULL,
                            'logoUrl' => 'https://ik.imagekit.io/stw2z8z0k/Categories/chairs_RMEWIub5-.png?ik-sdk-version=javascript-1.4.3&updatedAt=1665943413891',
                            'active' => true,
                            'parentId' => NULL,
                            'priority' => 1,
                            'mainMenu' => true,
                            'smallLogoUrl' => 'https://ik.imagekit.io/stw2z8z0k/Categories/Small_Categories/chairs_0sXTPrTKD.png?ik-sdk-version=javascript-1.4.3&updatedAt=1665948863808',
                            'parent' => NULL,
                            'inverseParent' =>
                                array (
                                ),
                            'items' =>
                                array (
                                ),
                        ),
                ),
            'rooms' =>
                array (
                    0 =>
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
                    1 =>
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
                    2 =>
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
                    3 =>
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
                    4 =>
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
                ),
        );

        return response()->json($data);
    }
}
