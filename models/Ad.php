<?php

require_once __DIR__ . '/Model.php';

class Ad extends Model {

    protected static $table = 'ads';


    // finds and returns instance of user based on email or username
    public static function findItemByUserId($userId)
    {

    	self::dbConnect();

    	$query = 'SELECT * FROM ' . self::$table . ' WHERE user_id = :id';

    	$stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id', $userId, PDO::PARAM_STR);
        $stmt->execute();

        //Store the resultset in a variable named $result
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // The following code will set the attributes on the calling object based on the result variable's contents

        $instance = null;

        if ( $results )
        {

            $instance = new static;
            $instance->attributes = $results;
        }

        return $instance;
    }

        public static function findFeaturedItem()
    {

        self::dbConnect();


        $query = 'SELECT * FROM ' . static::$table . ' WHERE featured = :featured';

        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':featured', 1, PDO::PARAM_STR);
        $stmt->execute();

        //Store the resultset in a variable named $result
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // The following code will set the attributes on the calling object based on the result variable's contents

        $instance = null;

        if ( $results )
        {

            $instance = new static;
            $instance->attributes = $results;
        }

        return $instance;
    }

    

}

?>