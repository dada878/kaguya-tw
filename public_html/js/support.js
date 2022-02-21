//依照裝置調整布局
if (!detectmob()) {
    $(".SupportTable").addClass('w-50');
}

var vu = new Vue({
    ele:"#app",
    data:{
        rank:[]
    }
})

$.get('https://script.google.com/macros/s/AKfycbxF8VDR26K2zBRG-86nk1_E8LlAiQLHTF0u8ugPQIkltQg02-kXr_uiP47TykuWoYX-ow/exec', function(data) {
    vu.rank =JSON.parse(data)
    
});

vu.$mount('#app')