<?php
 
    class Task
    {
	function display()
	{
	    echo "<div class=\"task\">\n";
	    echo "<h2 class=\"task\">".$this->description."</h1>\n";
	    echo "<p><i>Difficulty</i>: ".$this->difficulty;
	    echo " <i>Urgency</i>: ".$this->urgency;
	    echo "</p>\n<p>".$this->longdescr;
	    echo "</p>\n";
            echo "<p style=\"text-align:right;\">".$this->status."</p></div>\n";
	}

	function table()
	{
	    echo "<tr><td>".$this->description."</td>";
	    echo "<td>".$this->difficulty."</td>";
            echo "<td>".$this->status."</td></tr>\n";
	}
		
	var $description;
	var $difficulty;
	var $urgency;
	var $longdescr;
	var $status;
    }

    class Todo 
    {
	function load( $file )
	{
	    $this->todo_file = $file;
	
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

	function table()
	{
	   echo "<table>";
	   foreach( $this->array as $task )
           {
                $task->table();
           } 
	   echo "</table>";
	}

	var $array;	
	var $todo_file;
    }
