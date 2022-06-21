(function () {
    const delBtn = document.querySelector('#btnDel');
    delBtn.addEventListener("click", (e) => {
        if(confirm("delete?")) {
            location.href = `del?i_board=${delBtn.dataset.i_board}`;
        }
    })
})();