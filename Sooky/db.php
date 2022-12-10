<?php

namespace portalove;

class db
{
    private $host;
    private $dbName;
    private $username;
    private $password;
    private $port;
    private $connection;

    public function __construct($host, $dbName, $username, $password, $port = 3306)
    {
        $this->host = $host;
        $this->dbName = $dbName;
        $this->username = $username;
        $this->password = $password;
        $this->port = $port;

        try {
            $this->connection = new \PDO("mysql:host=$host;dbname=$dbName;port=$port", $username, $password);
            // set the PDO error mode to exception
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch(\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function getDays(){
        $sql = "SELECT * FROM days";
        $days = [];
        try {
            $query = $this->connection->query($sql);
            while ($row = $query->fetch()) {
                $days[] = [
                    'id' => $row['id'],
                    'div_id' => $row['div_id'],
                    'day_id' => $row['day_id'],
                    'day' => $row['day']
                ];

            }
            return $days;
        }catch(\PDOException $e){
            return [];
        }
    }

    public function getWeather($day){
        $sql = "SELECT * FROM weather WHERE DAYOFWEEK(date) = ".$day." ORDER BY date asc LIMIT 3";
        $weather = [];

        try {
            $query = $this->connection->query($sql);
            while ($row = $query->fetch()) {
                $weather[] = [
                    'id' => $row['id'],
                    'temp_avg' => $row['temp_avg'],
                    'temp_one' => $row['temp_one'],
                    'temp_two' => $row['temp_two'],
                    'temp_three' => $row['temp_three'],
                    'temp_four' => $row['temp_four'],
                    'date' => $row['date'],
                    'country' => $row['country'],
                    'weather' => $row['weather']
                ];

            }
            return $weather;
        }catch(\PDOException $e){
            return [];
        }
    }
    public function getWeatherItem($id){
        $sql = "SELECT * FROM weather WHERE id=".$id;
        $weather = [];

        try {
            $query = $this->connection->query($sql);
            while ($row = $query->fetch()) {
                $weather[] = [
                    'id' => $row['id'],
                    'temp_avg' => $row['temp_avg'],
                    'temp_one' => $row['temp_one'],
                    'temp_two' => $row['temp_two'],
                    'temp_three' => $row['temp_three'],
                    'temp_four' => $row['temp_four'],
                    'date' => $row['date'],
                    'country' => $row['country'],
                    'weather' => $row['weather']
                ];

            }
            return $weather;
        }catch(\PDOException $e){
            return [];
        }
    }

    public function getWeatherItems(){
        $sql = "SELECT * FROM weather";
        $weather = [];

        try {
            $query = $this->connection->query($sql);
            while ($row = $query->fetch()) {
                $weather[] = [
                    'id' => $row['id'],
                    'temp_avg' => $row['temp_avg'],
                    'temp_one' => $row['temp_one'],
                    'temp_two' => $row['temp_two'],
                    'temp_three' => $row['temp_three'],
                    'temp_four' => $row['temp_four'],
                    'date' => $row['date'],
                    'country' => $row['country'],
                    'weather' => $row['weather']
                ];

            }
            return $weather;
        }catch(\PDOException $e){
            return [];
        }
    }


    public function getDestinations(){
        $sql = "SELECT * FROM destinations";
        $destinations = [];

        try {
            $query = $this->connection->query($sql);
            while ($row = $query->fetch()) {
                $destinations[] = [
                    'id' => $row['id'],
                    'name' => $row['name']
                ];

            }
            return $destinations;
        }catch(\PDOException $e){
            return [];
        }
    }

    public function getRecomended(){
        $sql = "SELECT * FROM recomended";
        $recomended = [];

        try {
            $query = $this->connection->query($sql);
            while ($row = $query->fetch()) {
                $recomended[] = [
                    'id' => $row['id'],
                    'name' => $row['name'],
                    'href'=>$row['href']
                ];

            }
            return $recomended;
        }catch(\PDOException $e){
            return [];
        }
    }

    public function getRecomended_items(){
        $sql = "SELECT * FROM recomended_items";
        $items = [];

        try {
            $query = $this->connection->query($sql);
            while ($row = $query->fetch()) {
                $items[] = [
                    'id' => $row['id'],
                    'name' => $row['name'],
                    'about' => $row['about'],
                    'image' => $row['image'],
                    'href'=>$row['href']
                ];

            }
            return $items;
        }catch(\PDOException $e){
            return [];
        }
    }
    public function getMost_visited(){
        $sql = "SELECT * FROM most_visited";
        $items = [];

        try {
            $query = $this->connection->query($sql);
            while ($row = $query->fetch()) {
                $items[] = [
                    'id' => $row['id'],
                    'city' => $row['city'],
                    'about' => $row['about'],
                    'image' => $row['image']
                ];

            }
            return $items;
        }catch(\PDOException $e){
            return [];
        }
    }

    public function insertTicket($from, $to, $departure, $return, $type){
        $sql = "INSERT INTO tickets VALUES (null, '".$from."', '".$to."', '".$departure."', '".$return."', '".$type."')";
        try {
            $this->connection->query($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function insertWeather($temp_avg, $temp_one, $temp_two, $temp_three, $temp_four, $date, $country, $weather){
        $sql = "INSERT INTO weather VALUES (null, '".$temp_avg."', '".$temp_one."', '".$temp_two."', '".$temp_three."', '".$temp_four."', '".$date."', '".$country."', '".$weather."')";
        try {
            $this->connection->query($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function login($email, $password)
    {
        $sql = "SELECT COUNT(id) AS is_admin FROM users WHERE email = '".$email."' AND password = '".$password."'";
        try {
            $query = $this->connection->query($sql);
            $userExists = $query->fetch(\PDO::FETCH_ASSOC);
            if(intval($userExists['is_admin']) === 1) {
                return true;
            } else {
                return false;
            }
        } catch (\PDOException $e) {
            var_dump($e);
            return false;
        }
    }
    public function getMostVisited($id){
        $sql = "SELECT * FROM most_visited WHERE id=".$id;
        $items = [];

        try {
            $query = $this->connection->query($sql);
            while ($row = $query->fetch()) {
                $items[] = [
                    'id' => $row['id'],
                    'city' => $row['city'],
                    'about' => $row['about'],
                    'image' => $row['image']
                ];

            }
            return $items;
        }catch(\PDOException $e){
            return [];
        }
    }


    public function updatevisited($id, $city, $about, $image)
    {
        $sql = "UPDATE most_visited 
                SET city = '".$city."', about = '".$about."', image = '".$image."'
                WHERE id =".$id;
        try {
            $this->connection->query($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }
    public function updateWeather($id, $temp_avg, $temp_one, $temp_two, $temp_three, $temp_four, $date, $country, $weather)
    {
        $sql = "UPDATE weather 
                SET temp_avg = '".$temp_avg."', temp_one = '".$temp_one."', temp_two = '".$temp_two."', temp_three = '".$temp_three."', temp_four = '".$temp_four."', date = '".$date."', country = '".$country."', weather = '".$weather."'
                WHERE id =".$id;
        try {
            $this->connection->query($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }
    public function deleteWeather($id)
    {
        $sql = "DELETE FROM weather WHERE id = ". $id;

        try {
            $this->connection->query($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function deletePlace($id)
    {
        $sql = "DELETE FROM most_visited WHERE id = ". $id;

        try {
            $this->connection->query($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }


}