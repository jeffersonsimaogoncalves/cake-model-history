<?php

namespace ModelHistory\Model\Filter;

use Cake\I18n\Time;

class DateFilter extends Filter
{
    /**
     * {@inheritDoc}
     */
    public function save($fieldname, $dateValue, $model = null) {
        if (!is_object($dateValue)) {
            $dateValue = new Time($dateValue);
        }
        $dateValue->setTimezone('Europe/Berlin');
        return $dateValue;
    }

    /**
     * {@inheritDoc}
     */
    public function display($fieldname, $dateValue, $model = null)
    {
        if (!is_object($dateValue)) {
            $dateValue = new Time($dateValue);
        }
        $dateValue->setTimezone('Europe/Berlin');
        return $dateValue->nice();
    }
}
