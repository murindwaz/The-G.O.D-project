<?php

namespace Devlab\PollBundle\Permutator;

/**
 * Description of Permutations
 *
 * @author themaster
 */
class Permutations {

    public function availables(array $values) {
        $listOfPermutations = array();
        while ($one = \array_shift($values)) {
            foreach($values as $value) {
                $listOfPermutations[] = array($one, $value);
            }
        }
        return ($listOfPermutations);
    }

}

?>
