//GRAFICO1
am5.ready(function() {
                
// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new("chartdiv2");

// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
root.setThemes([
    am5themes_Animated.new(root)
]);

// Create chart
// https://www.amcharts.com/docs/v5/charts/xy-chart/
var chart = root.container.children.push(am5xy.XYChart.new(root, {
    panX: true,
    panY: true,
    wheelX: "panX",
    wheelY: "zoomX",
    layout: root.verticalLayout,
    pinchZoomX:true
}));

// Add cursor
// https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {
    behavior: "none"
}));
cursor.lineY.set("visible", false);

var colorSet = am5.ColorSet.new(root, {});

// The data
var data = [
{
    year: "Janeiro",
    value: 220,
    strokeSettings: {
    stroke: colorSet.getIndex(0)
    },
    fillSettings: {
    fill: colorSet.getIndex(0),
    },
    bulletSettings: {
    fill: colorSet.getIndex(0)
    }
},
{
    year: "Fevereiro",
    value: 315,
    bulletSettings: {
    fill: colorSet.getIndex(0)
    }
},
{
    year: "Março",
    value: 230,
    bulletSettings: {
    fill: colorSet.getIndex(0)
    }
},
{
    year: "Abril",
    value: 294,
    bulletSettings: {
    fill: colorSet.getIndex(0)
    }
},
{
    year: "Maio",
    value: 330,
    strokeSettings: {
    stroke: colorSet.getIndex(0)
    },
    fillSettings: {
    fill: colorSet.getIndex(0),
    },
    bulletSettings: {
    fill: colorSet.getIndex(0)
    }
}
];

// Create axes
// https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
var xRenderer = am5xy.AxisRendererX.new(root, {});
xRenderer.grid.template.set("location", 0.5);
xRenderer.labels.template.setAll({
    location: 0.5,
    multiLocation: 0.5
});

var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
    categoryField: "year",
    renderer: xRenderer,
    tooltip: am5.Tooltip.new(root, {})
}));

xAxis.data.setAll(data);

var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
    maxPrecision: 0,
    renderer: am5xy.AxisRendererY.new(root, {})
}));

var series = chart.series.push(am5xy.LineSeries.new(root, {
    xAxis: xAxis,
    yAxis: yAxis,
    valueYField: "value",
    categoryXField: "year",
    tooltip: am5.Tooltip.new(root, {
        labelText: "{valueY}",
        dy:-5
    })
}));

series.strokes.template.setAll({
    templateField: "strokeSettings",
    strokeWidth: 2
});

series.fills.template.setAll({
    visible: true,
    fillOpacity: 0.5,
    templateField: "fillSettings"
});


series.bullets.push(function() {
    return am5.Bullet.new(root, {
        sprite: am5.Circle.new(root, {
        templateField: "bulletSettings",
        radius: 5
        })
    });
});

series.data.setAll(data);
series.appear(1000);

// Add scrollbar
// https://www.amcharts.com/docs/v5/charts/xy-chart/scrollbars/
chart.set("scrollbarX", am5.Scrollbar.new(root, {
    orientation: "horizontal",
    marginBottom: 20
}));

// Make stuff animate on load
// https://www.amcharts.com/docs/v5/concepts/animations/
chart.appear(1000, 100);

}); // end am5.ready()


//GRAFICO2
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
    }))
    
    
    // Data
    var data = [
    {
        year: "Janeiro",
        cachorros: 12,
        gatos: 8
    }, 
    {
        year: "Fevereiro",
        cachorros: 5,
        gatos: 9
    }, 
    {
        year: "Março",
        cachorros: 10,
        gatos: 3
    }, 
    {
        year: "Abril",
        cachorros: 13,
        gatos: 10
    }, 
    {
        year: "Maio",
        cachorros: 15,
        gatos: 16
    }];
    
    
    // Create axes
    // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
    var yAxis = chart.yAxes.push(am5xy.CategoryAxis.new(root, {
    categoryField: "year",
    renderer: am5xy.AxisRendererY.new(root, {
        inversed: true,
        cellStartLocation: 0.1,
        cellEndLocation: 0.9
    })
    }));
    
    yAxis.data.setAll(data);
    
    var xAxis = chart.xAxes.push(am5xy.ValueAxis.new(root, {
        renderer: am5xy.AxisRendererX.new(root, {
            strokeOpacity: 0.1
        }),
        min: 0
    }));
    
    
    // Add series
    // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
    function createSeries(field, name) {
    var series = chart.series.push(am5xy.ColumnSeries.new(root, {
        name: name,
        xAxis: xAxis,
        yAxis: yAxis,
        valueXField: field,
        categoryYField: "year",
        sequencedInterpolation: true,
        tooltip: am5.Tooltip.new(root, {
        pointerOrientation: "horizontal",
        labelText: "[bold]{name}[/]\n{categoryY}: {valueX}"
        })
    }));
    
    series.columns.template.setAll({
        height: am5.p100,
        strokeOpacity: 0
    });
    
    
    series.bullets.push(function() {
        return am5.Bullet.new(root, {
        locationX: 1,
        locationY: 0.5,
        sprite: am5.Label.new(root, {
            centerY: am5.p50,
            text: "{valueX}",
            populateText: true
        })
        });
    });
    
    series.bullets.push(function() {
        return am5.Bullet.new(root, {
        locationX: 1,
        locationY: 0.5,
        sprite: am5.Label.new(root, {
            centerX: am5.p100,
            centerY: am5.p50,
            text: "{name}",
            fill: am5.color(0xffffff),
            populateText: true
        })
        });
    });
    
    series.data.setAll(data);
    series.appear();
    
    return series;
    }
    
    createSeries("cachorros", "Cachorros");
    createSeries("gatos", "Gatos");
    
    
    // Add legend
    // https://www.amcharts.com/docs/v5/charts/xy-chart/legend-xy-series/
    var legend = chart.children.push(am5.Legend.new(root, {
        centerX: am5.p50,
        x: am5.p50
    }));
    
    legend.data.setAll(chart.series.values);
    
    
    // Add cursor
    // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
    var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {
        behavior: "zoomY"
    }));
    cursor.lineY.set("forceHidden", true);
    cursor.lineX.set("forceHidden", true);
    
    
    // Make stuff animate on load
    // https://www.amcharts.com/docs/v5/concepts/animations/
    chart.appear(1000, 100);
    
    }); // end am5.ready()