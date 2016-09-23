<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Stylist.php";
    require_once "src/Client.php";

    $server = 'mysql:host=localhost:8889;dbname=hair_salon_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class StylistTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            Stylist::deleteAll();
            // Client::deleteAll();
        }

        function test_getName()
        {
            // Arrange
            $name = "Joe McCool";
            $id = null;
            $test_stylist = new Stylist($name, $id);

            // Act
            $result = $test_stylist->getName();

            // Assert
            $this->assertEquals($name, $result);
        }

        function test_getId()
        {
            // Arrange
            $name = "Joe McCool";
            $id = null;
            $test_stylist = new Stylist($name, $id);
            $test_stylist->save();

            // Act
            $result = $test_stylist->getId();

            // Assert
            $this->assertEquals($test_stylist->getId(), $result);
        }

        function test_setName()
        {
            // Arrange
            $name = "Joe McCool";
            $id = null;
            $test_stylist = new Stylist($name, $id);
            $test_stylist->save();
            $new_name = "Joseph McCool";

            // Act
            $test_stylist->setName($new_name);
            $result = $test_stylist->getName();

            // Assert
            $this->assertEquals($new_name, $result);
        }

        function test_getAll()
        {
            // Arrange
            $name = "Joe McCool";
            $id = null;
            $test_stylist1 = new Stylist($name, $id);
            $test_stylist1->save();

            $name = "Toni Thyme";
            $test_stylist2 = new Stylist($name, $id);
            $test_stylist2->save();

            // Act
            $result = Stylist::getAll();

            // Assert
            $this->assertEquals([$test_stylist1, $test_stylist2], $result);

        }

        function test_save()
        {
            // Arrange
            $name = "Joe McCool";
            $id = null;
            $test_stylist1 = new Stylist($name, $id);
            $test_stylist1->save();

            // Act
            $result = Stylist::getAll();

            // Assert
            $this->assertEquals([$test_stylist1], $result);
        }

        function test_deleteAll()
        {
            // Arrange
            $name = "Joe McCool";
            $id = null;
            $test_stylist1 = new Stylist($name, $id);
            $test_stylist1->save();

            $name = "Toni Thyme";
            $test_stylist2 = new Stylist($name, $id);
            $test_stylist2->save();

            // Act
            Stylist::deleteAll();

            // Assert
            $this->assertEquals([], Stylist::getAll());
        }

        function test_find()
        {
            // Arrange
            $name = "Joe McCool";
            $id = null;
            $test_stylist1 = new Stylist($name, $id);
            $test_stylist1->save();

            $name = "Toni Thyme";
            $test_stylist2 = new Stylist($name, $id);
            $test_stylist2->save();

            // Act
            $result = Stylist::find($test_stylist1->getId());

            // Assert
            $this->assertEquals($test_stylist1, $result);
        }

        function test_update()
        {
            // Arrange
            $name = "Joe McCool";
            $id = null;
            $test_stylist1 = new Stylist($name, $id);
            $test_stylist1->save();

            $new_name = "Joseph McCool";

            // Act
            $test_stylist1->update($new_name);
            $result = Stylist::find($test_stylist1->getId())->getName();

            // Assert
            $this->assertEquals($new_name, $result);
        }

        function test_delete()
        {
            // Arrange
            $name = "Joe McCool";
            $id = null;
            $test_stylist1 = new Stylist($name, $id);
            $test_stylist1->save();

            $name = "Toni Thyme";
            $test_stylist2 = new Stylist($name, $id);
            $test_stylist2->save();

            $name = "Jane Morrison";
            $test_stylist3 = new Stylist($name, $id);
            $test_stylist3->save();

            // Act
            $test_stylist1->delete();
            $result = Stylist::getAll();

            // Assert
            $this->assertEquals([$test_stylist2, $test_stylist3], $result);
        }

    }
?>
