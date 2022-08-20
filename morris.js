$(function(){

    Morris.Area({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { y: '2015', a: 100, b: 90 },
    { y: '2016', a: 75,  b: 65 },
    { y: '2017', a: 50,  b: 40 },
    { y: '2018', a: 75,  b: 65 },
    { y: '2019', a: 50,  b: 40 },
    { y: '2020', a: 75,  b: 65 },
    { y: '2021', a: 100, b: 90 }
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'y',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['a', 'b'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Value A', 'Value B'],
    resize: true
});

Morris.Donut({
  element: 'myDonutchart',
  data: [
    {label: "Download Sales", value: 12},
    {label: "In-Store Sales", value: 30},
    {label: "Mail-Order Sales", value: 20}
  ],
  resize: true
});

});