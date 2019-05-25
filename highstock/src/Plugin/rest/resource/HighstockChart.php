<?php
namespace Drupal\highstock\Plugin\rest\resource;
use Drupal\rest\Plugin\ResourceBase;
use Symfony\Component\HttpFoundation\JsonResponse;
/**
 * Provides a resource to get view modes by entity and bundle.
 *
 * @RestResource(
 *   id = "highstock_chart_resource",
 *   label = @Translation("Highstock Chart resource"),
 *   uri_paths = {
 *     "canonical" = "/api/highstockchart",
 *   }
 * )
 */
class HighstockChart extends ResourceBase {
    /**
     * Responds to GET requests.
     *
     * Returns a list of data for specified chart.
     *
     * @throws \Symfony\Component\HttpKernel\Exception\HttpException
     *   Throws exception expected.
     */
    public function get() {
        $result = [
            [1297987200000, 204011724],
            [1298332800000, 218135561],
            [1298419200000, 167962942],
            [1299110400000, 125196764],
            [1299196800000, 113316483],
            [1299456000000, 136530149],
            [1299542400000, 89078955],
            [1338249600000, 81.75],
            [1338336000000, 82.74],
            [1338422400000, 82.53],
            [1338508800000, 80.14],
            [1338768000000, 80.61],
            [1339718400000, 82.02],
            [1339977600000, 83.68],
            [1340064000000, 83.92],
            [1402012800000, 92.22],
            [1402272000000, 93.70],
            [1402963200000, 92.08],
            [1403049600000, 92.18],
            [1403136000000, 91.86],
            [1403222400000, 90.91],
            [1403481600000, 90.83],
        ];
        return new JsonResponse($result);
    }
}