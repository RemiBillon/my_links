<?php

function isSubmitted(array $form) :bool
{
    foreach($form as $value){
        if(null === $value["value"]){
            return false;
        }
    }
    return true;
    /*if (null !== $form["email"]["value"]
        && null !== $form["password"]["value"]
        && null !== $form["confirm"]["value"]) {
        return true;
    }
    return false;*/
}