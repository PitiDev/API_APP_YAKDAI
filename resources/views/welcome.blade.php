{{-- <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-info text-white mr-2">
        <i class="mdi mdi-account-card-details"></i>
      </span> ເພີ່ມຂໍ້ມູນລູກຄ້າ </h3>
  </div>
  
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col text-center">
                    
                    <button class="btn btn-gradient-info btn-rounded btn-fw mr-12" onclick="document.getElementById('myFileInput').click()" > <i class="mdi mdi-file-image"></i> ເລືອກຮູບພາບ </button>
                </div>
              </div>
              <br>
              <img id="blah" [src]="imgURL || 'https://image.flaticon.com/icons/svg/1777/1777609.svg'"  width="100%"/>
            </div>
        </div>
      </div>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
             <form class="forms-sample" action="{{ route('create-cus') }}" method="post" enctype="multipart/form-data">
                 @csrf
              <div class="form-group">
                    <input #file type="file" name="IMAGE" id="myFileInput" accept='image/*' (change)="preview(file.files)"/>
                <label for="exampleInputUsername1">ຊື່</label>
                <input type="text" name="NAME" class="form-control border-0" id="exampleInputUsername1" placeholder="ຊື່">
              </div>
              <div class="form-group">
                  <label for="exampleInputUsername1">ນາມສະກຸນ</label>
                  <input name="SURNAME" type="text" class="form-control" id="exampleInputUsername1" placeholder="ນາມສະກຸນ">
              </div>

              <div class="form-group">
                <label for="">ເລືອກເພດ</label>
                  <select name="GENDER" class="form-control border-0">
                      <option>ຍິງ</option>
                      <option>ຊາຍ</option>
                    </select>
              </div>
              <div class="form-group">
                  <label for="exampleInputUsername1">ບ້ານ</label>
                  <input name="VIALLAGE" type="text" class="form-control" id="exampleInputUsername1" placeholder="ບ້ານ">
              </div>
              <div class="form-group">
                  <label for="exampleInputUsername1">ເມືອງ</label>
                  <input name="DISTRICT" type="text" class="form-control" id="exampleInputUsername1" placeholder="ເມືອງ">
              </div>
              <div class="form-group">
                  <label for="exampleInputUsername1">ແຂວງ</label>
                  <input name="PROVINCE" type="text" class="form-control" id="exampleInputUsername1" placeholder="ແຂວງ">
              </div>
              <div class="form-group">
                  <label for="exampleInputUsername1">ເບີໂທ</label>
                  <input name="PHONE" type="text" class="form-control" id="exampleInputUsername1" placeholder="ເບີໂທ">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="EMAIL" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">ອັບໂຫຼດເອກະສານ 1</label>
                <input name="PDF1" type="file" class="form-control" id="exampleInputEmail1" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">ອັບໂຫຼດເອກະສານ 2</label>
                <input name="PDF2" type="file" class="form-control" id="exampleInputEmail1" placeholder="Email">
              </div>
              <br>
              <button type="submit" style="width: 210px;" class="mx-auto text-center btn btn-gradient-info btn-rounded btn-fw mr-12"><i class="mdi mdi-content-save"></i> ບັນທືກຂໍ້ມູນ</button>
            </form>
          </div>
        </div>
      </div>

      
</div> --}}


<h1>Error GET/....</h1>