	function openBugReportOverlay(){
    	document.getElementById("bugReport").style.display = "inline";
    }
    
	function openNav() {
    	document.getElementById("mySidenav").style.width = "250px";
    	//document.getElementById("main").style.marginLeft = "250px";
	}

	function closeNav() {
    	document.getElementById("mySidenav").style.width = "0";
    	//document.getElementById("main").style.marginLeft = "0";
	}
    
	$('#sortby').on('change',function(){
		if(this.value == "version"){
			$('#version').removeClass('hidden');
			$('#bugName').addClass('hidden');
			$('#status').addClass('hidden');
			$('#priority').addClass('hidden');
			$('#sortReports').removeClass('hidden');
 		}else if(this.value == "bugName"){
			$('#version').addClass('hidden');
			$('#bugName').removeClass('hidden');
			$('#status').addClass('hidden');
			$('#priority').addClass('hidden');
			$('#sortReports').removeClass('hidden');
		}else if(this.value == "status"){
			$('#version').addClass('hidden');
			$('#bugName').addClass('hidden');
			$('#status').removeClass('hidden');
			$('#priority').addClass('hidden');
			$('#sortReports').removeClass('hidden');
		}else if(this.value == "priority"){
			$('#version').addClass('hidden');
			$('#bugName').addClass('hidden');
			$('#status').addClass('hidden');
			$('#priority').removeClass('hidden');
			$('#sortReports').removeClass('hidden');
		}else{
			$('#version').addClass('hidden');
			$('#bugName').addClass('hidden');
			$('#status').addClass('hidden');
			$('#priority').addClass('hidden');
			$('#sortReports').addClass('hidden');
		}
	});
    
	function toggleCommentsForm(id){
		var string1 = ".commentUpdateForm" + id;
		var string2 = "#commentsPrimary" + id;
		$(string2).toggle();
		$(string1).toggle();      
	}
    
    function toggleStatusForm(id){
    	var string1 = ".statusUpdateForm" + id;
        $(string1).toggle();
    }
    
    function togglePriorityForm(id){
    	var string1 = ".priorityUpdateForm" + id;
        $(string1).toggle();
    }
    
    function toggleNotes(id){
    	var string1 = "#notes" + id;
        $(string1).dialog({
			//autoOpen: false,
			show: {
				effect: "blind",
				duration: 1000
			},
			hide: {
				effect: "explode",
 				duration: 1000
			}
		});
    }
    
    function toggleApprovalForm(id){
    	var string1 = "#approvalForm" + id;
        $(string1).dialog({
			//autoOpen: false,
			show: {
				effect: "blind",
				duration: 1000
			},
			hide: {
				effect: "explode",
 				duration: 1000
			}
		});
    }
    	
	function toggleVideo(){
		$('#modvideos').toggle();
		document.getElementById('donations').style.display = "none";
		document.getElementById('bugReps').style.display = "none";
        document.getElementById('bugReqs').style.display = "none";
		document.getElementById('modvideos');
	}
        
	function toggleDonation(){
		$('#donations').toggle();
		document.getElementById('donations');
		document.getElementById('bugReps').style.display = "none";
        document.getElementById('bugReqs').style.display = "none";
		document.getElementById('modvideos').style.display = "none";
	}
        
	function toggleBugReps(){
		$('#bugReps').toggle();
		document.getElementById('donations').style.display = "none";
		document.getElementById('bugReps');
        document.getElementById('bugReqs').style.display = "none";
		document.getElementById('modvideos').style.display = "none";
	}
    
    function toggleBugReqs(){
		$('#bugReqs').toggle();
		document.getElementById('donations').style.display = "none";
		document.getElementById('bugReps').style.display = "none";
        document.getElementById('bugReqs');
		document.getElementById('modvideos').style.display = "none";
	}
