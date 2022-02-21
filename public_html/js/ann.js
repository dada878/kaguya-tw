var vu = new Vue({
  ele:"#app",
  data:{
      rank:[]
  }
})

$.post('https://script.google.com/macros/s/AKfycbyI_P97qQaO5QISJI2Ez7Fj1dzdGQgh35p8DqBhvA_bsRKWBKY-XuG5WJca1VudUWJuWg/exec',"", function(data) {
  vu.rank =JSON.parse(data)
  for (let i in vu.rank) {
    vu.rank[i][1][0][0] = vu.rank[i][1][0][0].replaceAll("\\n","\n")

  }
  $("#loading").remove();
});

vu.$mount('#app')


/* <div class="card text-white bg-dark border-secondary my-3">
<div class="card-body">
  <h1 class="card-title">關於輝夜伺服器網頁</h1>
  <p class="card-text h5">簡單介紹一下這個網站可以做什麼
      <br>+ 快速回報bug給管理員
      <br>+ 查看更新日誌&公告
      <br>+ 贊助支持我們
      <br>+ 查看贊助的那些乾爹們
      <br>+ 讓新玩家可以快速加入遊戲，不需要自己慢慢輸入IP
  </p>
</div>
<img src="../assets/ann/info.png" class="card-img-top" alt="...">
<div class="card-footer">
  <small class="text-muted">公告日期 2021/1/12</small>
</div>
</div>
<div class="card text-white bg-dark border-secondary">
<div class="card-body">
  <h1 class="card-title">網頁完工囉</h1>
  <p class="card-text h5">總知歡迎關注我們的公告喔
  </p>
</div>
<img src="../assets/ann/online.png" class="card-img-top" alt="...">
<div class="card-footer">
  <small class="text-muted">公告日期 2021/1/12</small>
</div>
</div> */