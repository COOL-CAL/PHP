(function() {
    const trList = document.querySelectorAll('tbody > tr');
    // trList.forEach((tr) => {
    //     tr.addEventListener ("click", () => {
    //         location.href = `detail.php?i_board=${tr.dataset.i_board}`;
    //     });
    // });

    //solve.
    trList.forEach(item => {
        item.addEventListener ("click", e => { //e(이벤트 쓸 때 사용) 안 쓰고 () 써도 됨.
            location.href = `detail?i_board=${item.dataset.i_board}`;
        });
    });
    //ex dataset 사용방법 알기
    // const tr1 = trList[1];
    // console.log(tr1.dataset.i_board); //결과값 하나만 가져옴 
})();