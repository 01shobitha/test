<?php
 
    class Task
    {
	function display()
	{
	    echo "<div class=\"task\" id=\"t".$this->id."\">";
	    echo "<h2 class=\"task\">".$this->description."</h2>\n";
	    echo "<p><i>Difficulty</i>: ".$this->difficulty;
	    echo " <i>Urgency</i>: ".$this->urgency;
	    echo " <i>Platform</i>:".$this->platform;
	    echo "<br />\n".$this->longdescr;
	    echo "</p>\n";
            echo "<p style=\"text-align:right;\">".$this->status."</p></div>\n";
	}

	function table($page)
	{
	    echo "<tr><td style=\"border:1pt black solid;\"><a href=\"$page#t".$this->id."\">".$this->description."</a></td>";
	    $bgcolor = "white";
	    $fgcolor = "black";
	    if( stristr( $this->difficulty,"easy") != FALSE )
	    {
		$bgcolor = "green";
            }
	    else if( stristr($this->difficulty, "medium") != FALSE )
	    {
		$bgcolor = "orange";
            }
	    else if( stristr( $this->difficulty,"hard") != FALSE )
	    {
		$bgcolor = "red";
            }
	    else if( stristr( $this->difficulty,"guru") != FALSE )
	    {
		$bgcolor = "black";
 	        $fgcolor = "white";
            }
	    echo "<td style=\"background-color:$bgcolor;border:1pt black solid;color:$fgcolor;text-align:center;\">".$this->difficulty."</td>";

$bgcolor = "white";

	    if( stristr( $this->urgency,"wishlist") )
	    {
		$bgcolor = "green";
	    }
	    else if( stristr( $this->urgency,"normal") )
	    {
		$bgcolor = "orange";
	    }
	    else if( stristr( $this->urgency,"important") )
	    {
		$bgcolor = "read";
	    }
	    else if( stristr( $this->urgency,"critical") )
	    {
		$bgcolor = "black";
 		$fgcolor = "white";
	    }
            echo "<td style=\"background-color:$bgcolor;border:1pt black solid;color:$fgcolor;text-align:center;\">".$this->urgency."</td>";
	
            echo "<td style=\"text-align:center;border:1pt black solid;\">".$this->platform."</td>\n";

	    if( stristr( $this->status, "todo" ) )
	    {
		$bgcolor = "red";
	    }
	    else 
	    {
		$bgcolor = "green";
            }
            echo "<td style=\"text-align:center;background-color:$bgcolor;border:1pt black solid;\">".$this->status."</td></tr>\n";
	}
		
	var $description;
	var $difficulty;
	var $urgency;
	var $platform;
	var $longdescr;
	var $status;
        var $id;
    }

    class Todo 
    {
	function load( $file )
	{
	    $this->todo_file = $file;
	
	    $lastid  = 0;
	    $this->array = array();

	    $file_id = fopen( $this->todo_file, "r" );
	    $all = fread( $file_id, filesize( $this->todo_file ) );
	    fclose( $file_id ); 
	     
	    $lines = explode( "\n", $all );
	
	    $task = new Task;
	
	    foreach( $lines as $line )
	    {
		unset($regs);
		if( ereg( "^#.*$",$line, $regs )  || /* Trash comments */
		    ereg( "^[\ ]*$",$line, $regs ) )  /* Trash empty lines */
		{
		    continue;
	 	}
		else if( ereg( "^[dD]escription[\ ]*:[\ ]*(.*)$",$line,$regs) )
		{
		    $task->description = $regs[1];
		}
		else if( ereg( "^[pP]latform[\ ]*:[\ ]*(.*)$",$line,$regs) )
		{
	            $task->platform = $regs[1];
	        }
		else if( ereg( "^[dD]ifficulty[\ ]*:[\ ]*(.*)$",$line,$regs) )
		{
	            $task->difficulty = $regs[1];
	        }
		else if( ereg( "^[uU]rgency[\ ]*:[\ ]*(.*)$",$line,$regs) )
		{
	            $task->urgency = $regs[1];
		}
		else if( ereg( "^[Ss]tatus[\ ]*:[\ ]*(.*)$",$line,$regs) )
		{
	            $task->status = $regs[1];
		}
	        else if( ereg( "^[\[]?[tT]ask.*$", $line, $regs ) && 
			 isset( $task->description) )
		{
		    
		    $task->longdescr = $buffer;
		    unset($buffer);
		    $task->id = ++$lastid;
		    array_push( $this->array, $task ) ;
		    $task = new Task;
		}
		else if( !ereg("^[\[]?[tT]ask.*$", $line, $regs ) )
		{
		    $buffer .= $line;
		}		
	    }	
	}

	function liste()
	{
	   foreach( $this->array as $task )
	   {
		$task->display();
	   }
	}

	function table($page)
	{
	   echo "<table style=\"width:100%;\">";
           echo "<tr><th>Task name</th><th>Difficulty</th><th>Urgency</th><th>Platform</th><th>Status</th></tr>";
	   foreach( $this->array as $task )
           {
                $task->table($page);
           } 
	   echo "</table>";
	}

	var $array;	
	var $todo_file;
    }
