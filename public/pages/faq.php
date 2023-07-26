<?php
$absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/ShopAppPhp/public/layouts/header.php";
$footer = $_SERVER['DOCUMENT_ROOT'] . "/ShopAppPhp/public/layouts/footer.php";
include_once $absolute_path;
?>
<div class="container background mx-auto p-5 m-5">
<div class="row py-5">
                    <div class="col-12">
                        <h2 class="text-center text-light"> FAQ </h2>
                    </div>
                </div>
                <div class="row align-items-center p-5 ">
                <div class="col-sm-12 col-md-6 text-center">
                <div class="akordion">
            <div class="akordionchaild">
                <button>question</button>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>
            </div>
            <div class="akordionchaild">
                <button>question</button>
                <div class="text ">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>
            </div>
            <div class="akordionchaild">
                <button>question</button>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>
            </div>
            <div class="akordionchaild">
                <button>question</button>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>
            </div>
            <div class="akordionchaild">
                <button>question</button>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>
            </div>
        </div>

                </div>
                <div class="col-sm-12 col-md-6">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRcCNtwk-_L1R372mFvzQpAzItN3f20uL5ZROd2zpwfexOI908Ff0JhMJU-rN759f9p2U&usqp=CAU" class="img-fluid rounded-circle"/>
                    </div>
                </div>
</div>

<script>
    window.onload = function(){
    let button = document.querySelectorAll('.akordion .akordionchaild button')
    for(let i = 0;i<button.length;i++){
      button[i].addEventListener('click', function(){
     let textss =      this.parentNode.parentNode.children
        
          
          if(this.parentNode.children[1].classList.contains('active')){
              this.parentNode.children[1].classList.remove('active')
  
          }else{
              for(let j = 0;j<textss.length;j++){
                  textss[j].children[1].classList.remove('active')
              this.parentNode.children[1].classList.add('active')
              
              }
              
          }
      })
    }
  }
</script>

<?php
include_once $footer;
?>
