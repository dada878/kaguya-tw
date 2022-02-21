//依照裝置調整布局
if (detectmob()) {
    $("#from").addClass('w-75');
    $("#from").addClass('p-4');
}
else {
    $("#from").addClass('w-50');
    $("#from").addClass('p-5');
}
// $("#footer").addClass("bottom")