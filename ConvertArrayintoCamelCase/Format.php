<?php
/**
 * @author: Abhinav Bhardwaj
 * @since: March 13, 2016
 */
class Format
{

    //defining class variable
    protected $_input;
    /**
     * Returns the number of days in a given month + year
     *
     * @param  array input
     * @return array formatted output
     */
    public function setFormat()
    {

        $array          =       $this->_input;

        $finalArray     =       $this->_convertToCamelCase($array);



        return $finalArray;
    }

    /**
     *Function to make camelCase of the key in an array
     *@author: Abhinav Bhardwaj
     *@since: Sept 30, 2016
     */
    private function _convertToCamelCase($array){

               $finalArray     =       array();

               foreach ($array as $key=>$value):

                        if(strpos($key, "_"))
                                $key                    =       lcfirst(str_replace("_", "", ucwords($key, "_"))); //let's convert key into camelCase


                        if(!is_array($value))
                                $finalArray[$key]       =       $value;
                        else
                                $finalArray[$key]       =       $this->_convertToCamelCase($value );
                endforeach;

                return $finalArray;
    }

     /**
      *Function to set a proper format to responce
      *@param: Array Input
      *@return: Array Output
      *@author: Abhinav
      *@since: March 13, 2016
      */
     public function direct($input){
          $this->_input = $input;
          return $this->setFormat();
     }

}