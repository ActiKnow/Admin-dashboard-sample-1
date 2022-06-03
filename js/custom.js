/** @format */

$(document).ready(function () {
  $("#example").DataTable({
    scrollX: true,
  });

  // JQUERY CALANDER
  $(function () {
    $(".datepicker").datepicker();
  });

  $('[data-toggle="toggle"]').change(function () {
    // $("i", this).toggleClass("fa-chevron-down fa-chevron-up");
    $(this).parents().next(".hide").toggle();
  });
});

$("#langOpt").multiselect({
  columns: 1,
  placeholder: "Select month",
});

// TOOL TIP
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});

$(".collaps-sidebar").click(function () {
  $(".app-sidebar").toggleClass("toggle");
  $(".app-content").toggleClass("toggle");
});

$(".filter-icon").click(function () {
  $(".app-sidefilter").addClass("toggle");
});

$(".filter-close").click(function () {
  $(".app-sidefilter").removeClass("toggle");
});



$( function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( ".tags" ).autocomplete({
      source: availableTags
    });
  } );

// UPLOAD AVTAR
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});


// JQUERY NEXT & PERVIOUS
$(document).ready(function(){
    $(".tags-wapper .comp-panel").each(function(e) {
        if (e != 0)
            $(this).hide();
    });
    
    $("#next").click(function(){
        if ($(".tags-wapper .comp-panel:visible").next().length != 0)
            $(".tags-wapper .comp-panel:visible").next().show().prev().hide();
        else {
            $(".tags-wapper .comp-panel:visible").hide();
            $(".tags-wapper .comp-panel:first").show();
        }
        return false;
    });

    $("#prev").click(function(){
        if ($(".tags-wapper .comp-panel:visible").prev().length != 0)
            $(".tags-wapper .comp-panel:visible").prev().show().next().hide();
        else {
            $(".tags-wapper .comp-panel:visible").hide();
            $(".tags-wapper .comp-panel:last").show();
        }
        return false;
    });
});

$(document).ready(function(){
  $('.select-tag-type').on('change', function() {
    //alert(this.value);
    $(".tag-type").hide();
    $("#"+this.value+"").show();    
  });

});


// TIME PICKER
$( function() {
  $.widget( "ui.timespinner", $.ui.spinner, {
    options: {
      // seconds
      step: 60 * 1000,
      // hours
      page: 60
    },

    _parse: function( value ) {
      if ( typeof value === "string" ) {
        // already a timestamp
        if ( Number( value ) == value ) {
          return Number( value );
        }
        return +Globalize.parseDate( value );
      }
      return value;
    },

    _format: function( value ) {
      return Globalize.format( new Date(value), "t" );
    }
  });

  $( ".spinner" ).timespinner();

  $( "#culture" ).on( "change", function() {
    var current = $( "#spinner" ).timespinner( "value" );
    Globalize.culture( $(this).val() );
    $( ".spinner" ).timespinner( "value", current );
  });
} );


// COMBOBOX - SELECTBOX AUTOCOMPLETE
$( function() {
    $.widget( "custom.combobox", {
      _create: function() {
        this.wrapper = $( "<span>" )
          .addClass( "custom-combobox" )
          .insertAfter( this.element );
 
        this.element.hide();
        this._createAutocomplete();
        this._createShowAllButton();
      },
 
      _createAutocomplete: function() {
        var selected = this.element.children( ":selected" ),
          value = selected.val() ? selected.text() : "";
 
        this.input = $( "<input>" )
          .appendTo( this.wrapper )
          .val( value )
          .attr( "title", "" )
          .addClass( "custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left" )
          .autocomplete({
            delay: 0,
            minLength: 0,
            source: $.proxy( this, "_source" )
          })
          .tooltip({
            classes: {
              "ui-tooltip": "ui-state-highlight"
            }
          });
 
        this._on( this.input, {
          autocompleteselect: function( event, ui ) {
            ui.item.option.selected = true;
            this._trigger( "select", event, {
              item: ui.item.option
            });
          },
 
          autocompletechange: "_removeIfInvalid"
        });
      },
 
      _createShowAllButton: function() {
        var input = this.input,
          wasOpen = false;
 
        $( "<a>" )
          .attr( "tabIndex", -1 )
          .attr( "title", "Show All Items" )
          .tooltip()
          .appendTo( this.wrapper )
          .button({
            icons: {
              primary: "ui-icon-triangle-1-s"
            },
            text: false
          })
          .removeClass( "ui-corner-all" )
          .addClass( "custom-combobox-toggle ui-corner-right" )
          .on( "mousedown", function() {
            wasOpen = input.autocomplete( "widget" ).is( ":visible" );
          })
          .on( "click", function() {
            input.trigger( "focus" );
 
            // Close if already visible
            if ( wasOpen ) {
              return;
            }
 
            // Pass empty string as value to search for, displaying all results
            input.autocomplete( "search", "" );
          });
      },
 
      _source: function( request, response ) {
        var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), "i" );
        response( this.element.children( "option" ).map(function() {
          var text = $( this ).text();
          if ( this.value && ( !request.term || matcher.test(text) ) )
            return {
              label: text,
              value: text,
              option: this
            };
        }) );
      },
 
      _removeIfInvalid: function( event, ui ) {
 
        // Selected an item, nothing to do
        if ( ui.item ) {
          return;
        }
 
        // Search for a match (case-insensitive)
        var value = this.input.val(),
          valueLowerCase = value.toLowerCase(),
          valid = false;
        this.element.children( "option" ).each(function() {
          if ( $( this ).text().toLowerCase() === valueLowerCase ) {
            this.selected = valid = true;
            return false;
          }
        });
 
        // Found a match, nothing to do
        if ( valid ) {
          return;
        }
 
        // Remove invalid value
        this.input
          .val( "" )
          .attr( "title", value + " didn't match any item" )
          .tooltip( "open" );
        this.element.val( "" );
        this._delay(function() {
          this.input.tooltip( "close" ).attr( "title", "" );
        }, 2500 );
        this.input.autocomplete( "instance" ).term = "";
      },
 
      _destroy: function() {
        this.wrapper.remove();
        this.element.show();
      }
    });
 
    $( "#combobox" ).combobox();
    $( "#toggle" ).on( "click", function() {
      $( "#combobox" ).toggle();
    });
  } );
  
// MANGE SITE
  $("#customer").change(function() {
    if($(this).val() == 'add_new_customer'){
        $('#add_customer').modal('show');
    }
} );

$("#location").change(function() {
  if($(this).val() == 'add_new_location'){
      $('#add_location').modal('show');
  }
} );

$("#ward").change(function() {
  if($(this).val() == 'add_new_ward'){
      $('#add_ward').modal('show');
  }
} );


// DataTable
// $('#example').DataTable();
$('#example1').DataTable({
  scrollX: true,
      /* "scrollY": "200px",
       "scrollCollapse": true,
       "scrollX":true*/

   }).columns.adjust().draw();;
$('#example2').DataTable({
  scrollX: true,
});
$('#example3').DataTable({
  scrollX: true,
});
$('#example4').DataTable({
  scrollX: true,
});

 $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
  $($.fn.dataTable.tables(true)).DataTable()
     .columns.adjust();
}); 


//For Reference Point
$("#reference").change(function() {
  var html = '';
  $('.rajiv').html(html);
  var value = $(this).val();
  
  for(i=1; i<=value;i++)
  {
    html += '<div class="col-md-3"><label for="">Ref. Point '+i+'</label><input class="form-control" type="text"></div>';
    
  }
  $('.rajiv').html(html);
  console.log(html);
  
} );



//For Chart code 1

    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["", "Customer", { role: "style" } ],
        ["", 0, ""],
        ["", 10, "#6794DC"],
        ["", 19, "#C767DC"],
        ["", 0, "color: #6794DC"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "",
        // width: 600,
        // height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "bottom" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }


//For Chart code 2

    am5.ready(function() {

    // Create root element
    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
    var root = am5.Root.new("chartdiv");

    // Set themes
    // https://www.amcharts.com/docs/v5/concepts/themes/
    root.setThemes([
    am5themes_Animated.new(root)
    ]);


    // Create chart
    // https://www.amcharts.com/docs/v5/charts/radar-chart/
    var chart = root.container.children.push(am5radar.RadarChart.new(root, {
    panX: false,
    panY: false,
    startAngle: 180,
    endAngle: 360
    }));


    // Create axis and its renderer
    // https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Axes
    var axisRenderer = am5radar.AxisRendererCircular.new(root, {
    innerRadius: -30,
    strokeOpacity: 0.1
    });

    axisRenderer.labels.template.set("forceHidden", true);
    axisRenderer.grid.template.set("forceHidden", true);

    var xAxis = chart.xAxes.push(am5xy.ValueAxis.new(root, {
    maxDeviation: 0,
    min: 0,
    max: 1,
    strictMinMax: true,
    renderer: axisRenderer
    }));


    // add yes and no labels
    var yesDataItem = xAxis.makeDataItem({});
    yesDataItem.set("value", 0);
    yesDataItem.set("endValue", 0.5);
    xAxis.createAxisRange(yesDataItem);
    yesDataItem.get("label").setAll({text: "PASS", forceHidden:false});
    yesDataItem.get("axisFill").setAll({visible:true, fillOpacity:1, fill:root.interfaceColors.get("positive")});

    var noDataItem = xAxis.makeDataItem({});
    noDataItem.set("value", 1);
    noDataItem.set("endValue", 0.5);
    xAxis.createAxisRange(noDataItem);
    noDataItem.get("label").setAll({text: "FAIL", forceHidden:false});
    noDataItem.get("axisFill").setAll({visible:true, fillOpacity:1, fill:root.interfaceColors.get("negative")});

    // Add clock hand
    // https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Clock_hands
    var axisDataItem = xAxis.makeDataItem({});
    axisDataItem.set("value", 0.25);

    var bullet = axisDataItem.set("bullet", am5xy.AxisBullet.new(root, {
    sprite: am5radar.ClockHand.new(root, {
        radius: am5.percent(99)
    })
    }));

    xAxis.createAxisRange(axisDataItem);

    axisDataItem.get("grid").set("visible", false);

    let value = 0.25;
    setInterval(function() {
    if (value == 0.25) {
        value = 0.75;
    }
    else {
        value = 0.25;
    }

    axisDataItem.animate({
        key: "value",
        to: value,
        duration: 800,
        easing: am5.ease.out(am5.ease.cubic)
    });
    }, 2000);


    // Make stuff animate on load
    chart.appear(1000, 100);

    }); // end am5.ready()



//For Chart code 3

    am5.ready(function() {

    // Create root element
    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
    var root = am5.Root.new("chartdiv1");


    // Set themes
    // https://www.amcharts.com/docs/v5/concepts/themes/
    root.setThemes([
    am5themes_Animated.new(root)
    ]);


    // Create chart
    // https://www.amcharts.com/docs/v5/charts/xy-chart/
    var chart = root.container.children.push(am5xy.XYChart.new(root, {
    panX: false,
    panY: false,
    wheelX: "panX",
    wheelY: "zoomX",
    layout: root.verticalLayout
    }));


    // Add legend
    // https://www.amcharts.com/docs/v5/charts/xy-chart/legend-xy-series/
    var legend = chart.children.push(am5.Legend.new(root, {
    centerX: am5.p50,
    x: am5.p50
    }));

    var data = [{
    "year": "2021",
    "europe": 2.5,
    "namerica": 2.5,
    "asia": 2.1,
    "lamerica": 1,
    "meast": 0.8,
    "africa": 0.4
    }, {
    "year": "2022",
    "europe": 2.6,
    "namerica": 2.7,
    "asia": 2.2,
    "lamerica": 0.5,
    "meast": 0.4,
    "africa": 0.3
    }, {
    "year": "2023",
    "europe": 2.8,
    "namerica": 2.9,
    "asia": 2.4,
    "lamerica": 0.3,
    "meast": 0.9,
    "africa": 0.5
    }];


    // Create axes
    // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
    var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
    categoryField: "year",
    renderer: am5xy.AxisRendererX.new(root, {
        cellStartLocation: 0.1,
        cellEndLocation: 0.9
    }),
    tooltip: am5.Tooltip.new(root, {})
    }));

    xAxis.data.setAll(data);

    var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
    min: 0,
    renderer: am5xy.AxisRendererY.new(root, {})
    }));


    // Add series
    // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
    function makeSeries(name, fieldName, stacked) {
    var series = chart.series.push(am5xy.ColumnSeries.new(root, {
        stacked: stacked,
        name: name,
        xAxis: xAxis,
        yAxis: yAxis,
        valueYField: fieldName,
        categoryXField: "year"
    }));

    series.columns.template.setAll({
        tooltipText: "{name}, {categoryX}:{valueY}",
        width: am5.percent(90),
        tooltipY: am5.percent(10)
    });
    series.data.setAll(data);

    // Make stuff animate on load
    // https://www.amcharts.com/docs/v5/concepts/animations/
    series.appear();

    series.bullets.push(function () {
        return am5.Bullet.new(root, {
        locationY: 0.5,
        sprite: am5.Label.new(root, {
            text: "{valueY}",
            fill: root.interfaceColors.get("alternativeText"),
            centerY: am5.percent(50),
            centerX: am5.percent(50),
            populateText: true
        })
        });
    });

    legend.data.push(series);
    }

    makeSeries("Europe", "europe", false);
    makeSeries("North America", "namerica", true);
    makeSeries("Asia", "asia", false);
    makeSeries("Latin America", "lamerica", true);
    makeSeries("Middle East", "meast", true);
    makeSeries("Africa", "africa", true);


    // Make stuff animate on load
    // https://www.amcharts.com/docs/v5/concepts/animations/
    chart.appear(1000, 100);

    }); // end am5.ready()