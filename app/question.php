<?php
/**
 * Created by PhpStorm.
 * User: macbookpro
 * Date: 5/15/17
 * Time: 1:11 PM
 */

namespace App;


class question
{
    private $id;
    private $statement;
    private $answers=array();


    /**
     * @param array $ans
     */
    public function addAnswers(array $ans)
{
    for( $i=0;$i<count($ans);$i++)
    {
$this->answers[$ans[$i]->q_choice_char]=$ans[$i]->q_choice_content;

    }

}
public function setID($id)
{
    $this->id = $id;
}

    public function setStatement($s)
    {
        $this->statement=$s;
    }

    public function getID()
    {


        return $this->id;
    }

    public function getStatement()
    {


        return $this->statement;
    }
    public function getAnswers()
    {

        return $this->answers;
    }


}