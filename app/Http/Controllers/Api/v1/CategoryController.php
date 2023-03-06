<?php
namespace App\Http\Controllers\Api\v1;
class CategoryController
{
    public function getWithCount()
    {
        $data = array (
            0 =>
                array (
                    'category' =>
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
                    'itemsCount' => 10,
                ),
            1 =>
                array (
                    'category' =>
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
                    'itemsCount' => 1,
                ),
            2 =>
                array (
                    'category' =>
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
                    'itemsCount' => 1,
                ),
            3 =>
                array (
                    'category' =>
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
                    'itemsCount' => 1,
                ),
            4 =>
                array (
                    'category' =>
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
                    'itemsCount' => 40,
                ),
            5 =>
                array (
                    'category' =>
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
                    'itemsCount' => 1,
                ),
        );

        return response()->json($data);
    }
}
