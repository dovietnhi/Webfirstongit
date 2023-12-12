//------------slider------------------//
        const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
        const imgContainer = document.querySelector(".aspect-ratio-169")
        const dotItem = document.querySelectorAll(".dot")
        let index = 0
        let imgNumber = imgPosition.length
        console.log(imgPosition)
        imgPosition.forEach(function(img,index){
                img.style.left = index*100 + "%"
                dotItem[index].addEventListener("click",function(){
                slider(index)
                })
        })

        function imgSlide (){
                index++;
                console.log(index)
                if(index>=imgNumber) {index=0}
                slider (index)
        }
        function slider (index){
                imgContainer.style.left = "-" +index*100+ "%"
                const dotActive = document.querySelector(".active")
                dotActive.classList.remove("active")
                dotItem[index].classList.add("active")
        }
        setInterval(imgSlide,5000)
//menu cartegory//
const itemsliderbar = document.querySelectorAll(".cartegory-left-li")
itemsliderbar.forEach(function(menu,index){
       menu.addEventListener("click",function(){
        menu.classList.toggle("block")
       })
})
// product//
const bigImg = document.querySelector(".product-conten-left-big-img img")
const smallImg = document.querySelectorAll(".product-conten-left-small-img img")
smallImg.forEach(function(imgItem,X){
        imgItem.addEventListener("click",function(){
                bigImg.src = imgItem.src
        })
})
const mota = document.querySelector(".mota")
const ttbs = document.querySelector(".ttbs")
const ttlh = document.querySelector(".ttlh")
if(ttbs){
        ttbs.addEventListener("click", function(){
                document.querySelector(".product-conten-right-bottom-conten-ttbs").style.display = "block"
                document.querySelector(".product-conten-right-bottom-conten-mota").style.display = "none"
                document.querySelector(".product-conten-right-bottom-conten-ttlh").style.display = "none"
        })
}
if(mota){
        mota.addEventListener("click", function(){
                document.querySelector(".product-conten-right-bottom-conten-ttbs").style.display = "none"
                document.querySelector(".product-conten-right-bottom-conten-mota").style.display = "block"
                document.querySelector(".product-conten-right-bottom-conten-ttlh").style.display = "none"
        })
}
if(ttlh){
        ttlh.addEventListener("click", function(){
                document.querySelector(".product-conten-right-bottom-conten-ttbs").style.display = "none"
                document.querySelector(".product-conten-right-bottom-conten-mota").style.display = "none"
                document.querySelector(".product-conten-right-bottom-conten-ttlh").style.display = "block"
        })
}
const butTon = document.querySelector(".product-conten-right-bottom-top")
if(butTon){
        butTon.addEventListener("click", function(){
                document.querySelector(".product-conten-right-bottom-conten-big").classList.toggle("activeB")
        })
}
//------------------------------------------- dangnhap--------------------------------------------//
<script>
document.getElementById('redirectToPHP').addEventListener('click', function() {
    // Redirect to the PHP page when the button is clicked
    window.location.href = 'login.php'
});
</script>
