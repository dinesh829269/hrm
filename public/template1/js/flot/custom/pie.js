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

    var data, chartOptions;

    data_male_to_female_ratio = [
        {label: "Female", data: Math.floor(Math.random() * 100 + 370)},
        {label: "Male", data: Math.floor(Math.random() * 100 + 220)}
    ];

    data_age_group = [
        {label: "20-30", data: Math.floor(Math.random() * 100 + 370)},
        {label: "30-40", data: Math.floor(Math.random() * 100 + 220)},
        {label: "40 +", data: Math.floor(Math.random() * 100 + 220)}
    ];

    data_employee_by_type = [
        {label: "Regular Employee", data: Math.floor(Math.random() * 100 + 370)},
        {label: "Contract Employee", data: Math.floor(Math.random() * 100 + 220)}
    ];

    data_employee_by_department = [
        {label: "Developers", data: Math.floor(Math.random() * 100 + 370)},
        {label: "Management", data: Math.floor(Math.random() * 100 + 220)},
        {label: "Housekeeping", data: Math.floor(Math.random() * 100 + 220)}
    ];
    
    
    chartOptions_male_to_female_ratio = {
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


    chartOptions_age_group = {
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
        colors: [$green, $yellow, $orange],
    };


    chartOptions_employee_by_type = {
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
        colors: [$dark_blue, $teal],
    };
    
    
    chartOptions_employee_by_department = {
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

    var holder_male_to_female_ratio = $('#pie-chart-male-to-female');
    var holder_age_group = $('#pie-chart-age-group');
    var holder_employee_by_type = $('#pie-chart-employee-by-type');
    var holder_employee_by_category = $('#pie-chart-employee-by-department');

    if (holder_male_to_female_ratio.length) {
        $.plot(holder_male_to_female_ratio, data_male_to_female_ratio, chartOptions_male_to_female_ratio);
        $.plot(holder_age_group, data_age_group, chartOptions_age_group);
        $.plot(holder_employee_by_type, data_employee_by_type, chartOptions_employee_by_type);
        $.plot(holder_employee_by_category, data_employee_by_department, chartOptions_employee_by_department);
    }

});