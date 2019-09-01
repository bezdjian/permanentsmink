/*
	Prologue by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

$(document).ready(function(){
	//Autocomplete search
    $('#searchname').autocomplete({
        source: 'autocomplete.php',
        minLength: 2,
        select: function(event, ui) {
            //set attr data journalid to get the id when pressing Enter.
            $("#searchname").attr('data-journalid', ui.item.id);
            $.ajax( {
                url: "loadJournal.php",
                dataType: "html",
                data: {
                    'journalID': ui.item.id
                },
                success: function( data ) {
                    $("#journalTable").html(data);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log("ERROR: " + thrownError);
                }
            } );
        }
    });

    //Press ENTER on search filed
    $("#searchname").on('keyup', function (e) {
        $('#savemsg').html('');
        $('#savemsg').removeClass('alert-danger alert-success');
        if(e.keyCode == 13){
            $.ajax( {
                url: "loadJournal.php",
                dataType: "html",
                data: {
                    'journalID': $("#searchname").attr('data-journalid')
                },
                success: function( data ) {
                    if(data == "error"){
                        $('#savemsg').html('Search did not find any Journals!');
                        $('#savemsg').addClass('alert-danger');
                    }else{
                        $("#journalTable").html(data);
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log("ERROR: " + thrownError);
                }
            } );
        }
    });

    //Save Journal.
	$("#sparajournal").click(function(){
		var journalID = $("#searchname").attr('data-journalid');
		var remisfrom = $("#remissfrom").val();
		var efternamn = $("#efternamn").val();
		var fornamn = $("#fornamn").val();
		var birthdate = $("#birthdate").val();
		var telhem = $("#telhem").val();
		var remissdatum = $("#remissdatum").val();
        var adress = $("#adress").val();
        var email = $("#email").val();
        var sysselsattning = $("#sysselsattning").val();
        var telarb = $("#telarb").val();
        var vestlandsdiagnos = $("#vesterlandsdiagnos").val();
        var tcmdiagnos = $("#tcmdiagnos").val();

        var data = {
            'journalID': journalID,
            'remissfrom': remisfrom,
            'efternamn': efternamn,
            'fornamn': fornamn,
            'birthdate': birthdate,
            'telhem': telhem,
            'remissdatum': remissdatum,
            'adress': adress,
            'email': email,
            'sysselsattning': sysselsattning,
            'telarb': telarb,
            'vesterlandsk_diagnos': vestlandsdiagnos,
            'tcmdiagnos': tcmdiagnos
        };

        var checkboxes = {};
        var count=0;
        $('input[type=checkbox]').each(function () {
            //var value = (this.checked ? "1" : "0");
            checkboxes[this.name] = (this.checked ? "1" : "0");
            if(this.checked) count++;
        });

        $('#savemsg').html('');
        $('#savemsg').removeClass('alert-success alert-danger');

        $.ajax({
            type: "GET",
            data: {'journals':data, 'checkboxes':checkboxes},
            url: "save.php",
            success: function(msg){
            	console.log(msg);
            	if(msg == "done"){
                    $('#savemsg').html('Sparad!');
                    $('#savemsg').addClass('alert-success');
                }else{
                    $('#savemsg').html('Journalen kune inte sparas.');
                    $('#savemsg').addClass('alert-danger');
				}
            },
			error: function(e){
                $('#savemsg').html('Error: '+ e);
                $('#savemsg').addClass('alert-danger');
			}
        });
	});


    //Body loader
    $body = $("body");

    $(document).on({
        ajaxStart: function() { $body.addClass("loading");    },
        ajaxStop: function() { $body.removeClass("loading"); }
    });
});
