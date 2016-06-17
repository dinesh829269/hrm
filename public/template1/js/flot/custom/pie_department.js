var $border_color = "#efefef";
var $grid_color = "#ddd";
var $default_black = "#666";
var $green = "#8ecf67";
var $yellow = "#fac567";
var $orange = "#F08C56";
var $blue = "#1e91cf";
var $red = "#f74e4d";
var $teal = "#28D8CA";
var $grey = "#999999";
var $dark_blue = "#0D4F8B";
var $pink = "#ED6E5F";
$(function () {


    var data_department = [
        {label: "Female", data: Math.floor(Math.random() * 100 + 370)},
        {label: "Male", data: Math.floor(Math.random() * 100 + 220)}
    ];


    var data_employee_by_department = [
        {label: "Developers", data: Math.floor(Math.random() * 100 + 370)},
        {label: "Management", data: Math.floor(Math.random() * 100 + 220)},
        {label: "Housekeeping", data: Math.floor(Math.random() * 100 + 220)}
    ];


    var chartOptions_department = {
        series: {
            pie: {
                show: true,
                innerRadius: 0,
                stroke: {
                    width: 1
                }
            }
        },
        grid: {
            hoverable: true,
            clickable: false,
            borderWidth: 1,
            tickColor: $border_color,
            borderColor: $grid_color,
        },
        legend: {
            position: 'nw'
        },
        shadowSize: 0,
        tooltip: true,
        tooltipOpts: {
            content: '%s: %y'
        },
        colors: [$pink, $blue],
    };


    var chartOptions_employee_by_department = {
        series: {
            pie: {
                show: true,
                innerRadius: 0,
                stroke: {
                    width: 1
                }
            }
        },
        grid: {
            hoverable: true,
            clickable: false,
            borderWidth: 1,
            tickColor: $border_color,
            borderColor: $grid_color,
        },
        legend: {
            position: 'nw'
        },
        shadowSize: 0,
        tooltip: true,
        tooltipOpts: {
            content: '%s: %y'
        },
        colors: [$blue, $green, $orange],
    };

    var holder_department = $('#pie_department');
    var holder_employee_by_category = $('#pie-chart-employee-by-department');

    
    if (holder_department.length) {
        $.plot(holder_department, data_department, chartOptions_department);
        $.plot(holder_employee_by_category, data_employee_by_department, chartOptions_employee_by_department);
    }

});