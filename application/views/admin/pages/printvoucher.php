<?php include(APPPATH . 'views/admin/meta_tags.php'); ?>
<!DOCTYPE html>
<html lang="en">

<?php include(APPPATH . 'views/admin/head.php'); ?>
<style>
  .fv-col {
    width: 33%;
    padding: 5px;
    display: inline-block;
    /*width: 21cm;*/
    /*min-height: 29.7cm;*/
    /*padding: 2cm;*/
    margin: 1cm auto;
    border: 1px #D3D3D3 solid;
    border-radius: 5px;
    background: white;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  }
</style>
<style type="text/css" media="print">
  @page {
    size: A4 landscape;
    max-height: 100%;
    max-width: 100%
  }

  .fv-col {
    display: inline-block;
    width: 32%;
    margin: 20px auto;
    border: initial;
    border-radius: initial;
    min-height: initial;
    box-shadow: initial;
    background: initial;
    page-break-after: always;
  }
</style>
</head>

<body style="clearfix">
<div id="printelement">
  <div class="fv-col">

    <img id="reptrData_imgLogo_0" src="<?php if (!empty($CompanyList->CompanyLogo)) {
        echo base_url('assets/dist/images/' . $CompanyList->CompanyLogo);
    } else {
        echo base_url('assets/dist/images/School.jpg');
    } ?>" style="height:25px;width:50px;">
    <table id="voucher0" style="border-collapse: collapse; width: 0%; font-size: 12px;">

      <tbody>
      <tr>
        <td><strong>
                    <span id="reptrData_lblCampusName_0"><?php if (!empty($CompanyList->CompanyName)) {
                            echo $CompanyList->CompanyName;
                        } ?></span>
          </strong>
        </td>
        <td colspan="2" style="padding:2px;text-align:right;">
          <span id="reptrData_Label3_0">Bank Al Habib<br>A/C.No: 1119-0981-002188-01-8</span></td>
      </tr>
      <tr>
        <td colspan="3" style="padding: 2px; height: 10px; width: 355px; text-align: right;">
          <span id="reptrData_lblCampusBankRef_0"></span>
        </td>
      </tr>
      <tr class="fv-borderbottom">
        <td style="border-bottom: 1pt solid rgb(0, 0, 0);">Fee Challan</td>
        <td style=" border-bottom: 1pt solid rgb(0, 0, 0);"></td>
        <td style=" border-bottom: 1pt solid rgb(0, 0, 0);"><strong>BANK's<br> COPY</strong></td>
      </tr>
      <tr>
        <td><strong>Issue Date: <br><span id="reptrData_lblissueDate_0"
                                          style="font-size:smaller"><?php if (!empty($Voucher->CreationDate)) {
                        echo $Voucher->CreationDate;
                    } ?></span></strong></td>
        <td style="width:16%"><strong>Due Date: <br><span id="reptrData_lblDueDate_0"
                                                          style="font-size:smaller"><?php if (!empty($Voucher->DueDate)) {
                        echo $Voucher->DueDate;
                    } ?></span></strong></td>


      </tr>
      <tr>

      </tr>
      <tr class="fv-borderbottom">
        <td style=" border-bottom: 1pt solid rgb(0, 0, 0);"></td>
        <td style="border-bottom: 1pt solid rgb(0, 0, 0);"></td>
        <td style=" border-bottom: 1pt solid rgb(0, 0, 0);"></td>
      </tr>
      <tr class="fv-borderbottom">
        <td style="padding: 2px; height: 10px; width: 151px; border-bottom: 1pt solid rgb(0, 0, 0);"><strong>Student
            Name:</strong></td>
        <td style=" height: 10px; border-bottom: 1pt solid rgb(0, 0, 0);"><strong>
            <span id="reptrData_lblName_0"
                  style="font-size:smaller ; text-transform:uppercase"><?php if (!empty($Voucher->StudentName)) {
                    echo $Voucher->StudentName;
                } ?></span>
          </strong></td>
        <td style="padding: 2px; height: 10px; width: 95px; border-bottom: 1pt solid rgb(0, 0, 0);"><strong>C-GRN:
            <span id="reptrData_lblGrno_0"
                  style="font-size:smaller ; text-transform:uppercase"><?php if (!empty($Voucher->StudentGR)) {
                    echo $Voucher->StudentGR;
                } ?></span>
          </strong></td>
      </tr>
      <tr class="fv-borderbottom">
        <td style="padding: 2px; height: 7px; width: 151px; border-bottom: 1pt solid rgb(0, 0, 0);"><strong>Father
            Name:</strong></td>
        <td style="padding: 2px; height: 10px; border-bottom: 1pt solid rgb(0, 0, 0);"><strong>
            <span id="reptrData_lblFname_0"
                  style="font-size:smaller ; text-transform:uppercase"><?php if (!empty($Voucher->FatherName)) {
                    echo $Voucher->FatherName;
                } ?></span>
          </strong></td>
        <td style="padding: 2px; height: 10px; width: 95px; border-bottom: 1pt solid rgb(0, 0, 0);"><strong>Class:
            <span id="reptrData_lblClass_0"
                  style="font-size:smaller ; text-transform:uppercase"><?php if (!empty($Voucher->ClassName)) {
                    echo $Voucher->ClassName;
                } ?></span>
            <!-- &nbsp;<span id="reptrData_lblSection_0" style="font-size:smaller ; text-transform:uppercase">A</span> -->
          </strong></td>
      </tr>
      <tr class="fv-borderbottom">
        <td style="padding: 2px; height: 10px; width: 151px; border-bottom: 1pt solid rgb(0, 0, 0);"></td>
        <td style="padding: 2px; height: 10px; border-bottom: 1pt solid rgb(0, 0, 0);"></td>
        <td style="padding: 2px; height: 10px; width: 95px; border-bottom: 1pt solid rgb(0, 0, 0);"></td>
      </tr>
      <tr class="fv-borderall fv-maintext">
        <td style="padding: 2px; height: 25px; width: 150px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
          <strong>DATE</strong></td>
        <td style="padding: 2px; height: 25px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
          <strong>NAME / DESCRIPTION</strong></td>
        <td style="padding: 2px; height: 25px; width: 94px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
          <strong>TOTAL</strong></td>
      </tr>
      <tr class="fv-borderall fv-maintext">
        <td style="padding: 2px; height: 25px; width: 150px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
          <strong>
            <span id="reptrData_lblissueDate0_0"
                  style="font-size:smaller ; text-transform:uppercase"><?php if (!empty($Voucher->CreationDate)) {
                    echo $Voucher->CreationDate;
                } ?></span>
          </strong></td>
        <td style="padding: 2px; height: 25px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
          <span id="reptrData_LblFeeDescription_0"
                style="font-size:smaller ; text-transform:uppercase"><?php if (!empty($Voucher->Description)) {
                  echo $Voucher->Description;
              } ?> </span>
        </td>
        <td style="padding: 2px; height: 25px; width: 94px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
          <strong>
            <span id="reptrData_lblFess_0"
                  style="font-size:smaller ; text-transform:uppercase"><?php if (!empty($Voucher->Fee)) {
                   // if ($Voucher->Dues > 0) {
                        echo $Voucher->Fee;
                    //} else {
                    //    echo "Paid";
                    //}
                } ?></span>
          </strong></td>

      </tr>
        <!--ANNUAL FEE-->
        <!--                $where,$table,$orderid,$orderby-->
      <?php 
        if($MonthNumber != 0)
        {
      ?>        
      <tr class="fv-borderall fv-maintext">
          <?php
          $AnnualFee = $this->Admindb->getrecord(['StudentId'=>$Voucher->StudentId,'FeeMonth>='=>$PreviousDate,'Month'=>'Annual','IsActive'=>true,'IsDeleted'=>false],'fee','Dues');
          if(!empty($AnnualFee)){
              ?>
            <td colspan="2"
                style="padding: 2px; height: 25px;font-size:smaller ; width: 255px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
              ANNUAL FEE
            </td>
            <td style="padding: 2px; height: 25px; width: 94px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
              <strong>
                    <span id="reptrData_lblArrears_0"
                          style="font-size:smaller ; text-transform:uppercase"><?php echo $AnnualFee; ?></span>

              </strong></td>
              <?php
          }
          ?>
      </tr>
      <?php
          }
      ?>
      <?php if (!empty($OutStanding)) { ?>
      <tr class="fv-borderall fv-maintext">
        <td colspan="2"
            style="padding: 2px; height: 25px;font-size:smaller ; width: 255px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
          PAYABLE ARREARS
        </td>
        <td style="padding: 2px; height: 25px; width: 94px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
          <strong>
            <span id="reptrData_lblArrears_0"
                  style="font-size:smaller ; text-transform:uppercase"><?php
                    if ($Voucher->Dues > 0) {
                        echo $OutStanding;
                    } else {
                        echo "Paid";
                    } ?></span>

          </strong></td>
      </tr>
      <?php } ?>

      <tr class="fv-borderall fv-maintext">
        <td colspan="2"
            style="padding: 2px; height: 25px; width: 255px; text-align: center; text-transform: uppercase !important;font-size:smaller ; border: 1pt solid rgb(0, 0, 0);">
          PAYABLE BEFORE DUE DATE (<strong><span id="reptrData_lblDueDate0_0"><?php if (!empty($Voucher->DueDate)) {
                        if ($Voucher->Dues > 0) {
                            echo $Voucher->DueDate;
                        } else {
                            echo "Paid";
                        }
                    } ?></span>
          </strong>)
        </td>
        <td style="padding: 2px; height: 25px; width: 94px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
          <strong>
            <span id="reptrData_lblPayableFees_0"
                  style="font-size:smaller ; text-transform:uppercase"><?php if (!empty($Voucher->Fee)) {
                    if ($Voucher->Dues > 0) {
                        echo $Voucher->Fee + $Dues_OutStanding;
                    } else {
                        echo "Paid";
                    }
                } ?></span>
          </strong></td>
      </tr>
      <tr class="fv-borderall fv-maintext">
        <td colspan="2"
            style="padding: 2px; height: 25px; width: 255px; text-align: center; text-transform: uppercase !important; font-size:smaller; border: 1pt solid rgb(0, 0, 0);">
          PAYABLE AFTER DUE DATE
        </td>
        <td style="padding: 2px; height: 25px; width: 94px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
          <strong>
            <span id="reptrData_lblDueFees_0"
                  style="font-size:smaller ; text-transform:uppercase"><?php if (!empty($Voucher->Fee)) {
                    if ($Voucher->Dues > 0) {
                        echo $Voucher->Fee + $Dues_OutStanding + 500;
                    } else {
                        echo "Paid";
                    }
                } ?></span>
          </strong></td>
      </tr>

      <tr>
        <td style="padding: 2px; height: 10px; width: 151px;"></td>
        <td style="padding: 2px; height: 10px;"></td>
        <td style="padding: 2px; height: 10px; width: 95px;"></td>
      </tr>
      <tr class="fv-infotext">
        <td colspan="2" style="padding: 2px; height: 10px; width: 256px; font-size: 11px;"><strong>Instruction for
            Parents:</strong></td>
        <td style="padding: 2px; height: 10px; width: 95px; font-size: 11px;"></td>
      </tr>
      <tr>
        <td colspan="3" style="padding: 2px; height: 10px; width: 355px;">1. Fee Challan for each month are provided to
          student by
          their class teacher in last week of running month. However if it is not received or not delivered by the child
          , it will be responsibility of
          parents to collect the fee challan respective campus.
        </td>
      </tr>
      <tr>
        <td style="padding: 2px; height: 10px; width: 151px;"></td>
        <td style="padding: 2px; height: 10px;"></td>
        <td style="padding: 2px; height: 10px; width: 95px;"></td>
      </tr>
      <tr>
        <td colspan="3" style="padding: 2px; height: 10px; width: 355px;">2. Rs50 will be charged incase of misplacing
          or lost of voucher.
        </td>
      </tr>
      <tr>
        <td style="padding: 2px; height: 10px; width: 151px;"></td>
        <td style="padding: 2px; height: 10px;"></td>
        <td style="padding: 2px; height: 10px; width: 95px;"></td>
      </tr>
      <tr>
        <td colspan="3" style="padding: 2px; height: 10px; width: 355px;">3. Monthly fee is non-refundable even of June
          and July.
        </td>
      </tr>
      <tr>
        <td style="padding: 2px; height: 10px; width: 151px;"></td>
        <td style="padding: 2px; height: 10px;"></td>
        <td style="padding: 2px; height: 10px; width: 95px;"></td>
      </tr>
      <tr>
        <td colspan="3" style="padding: 2px; height: 10px; width: 355px;">4. Annual fee can be paid in installment
        </td>
      </tr>
      <tr>
        <td style="padding: 2px; height: 10px; width: 151px;"></td>
        <td style="padding: 2px; height: 10px;"></td>
        <td style="padding: 2px; height: 10px; width: 95px;"></td>
      </tr>
      <tr>
        <td colspan="3" style="padding: 2px; height: 10px; width: 355px;font-size:11px;"><strong>Note: Please collect
            your computerised receipt after fee payment</strong></td>
      </tr>
      <tr>
        <td style="padding: 2px; height: 10px; width: 151px;"></td>
        <td style="padding: 2px; height: 10px;"></td>
        <td style="padding: 2px; height: 10px; width: 95px;"></td>
      </tr>
      <tr>
        <td colspan="2" style="padding: 2px; height: 10px; width: 256px;font-size: 11px;">For any querries feel free to
          contact:
        </td>
        <td style="padding: 2px; height: 10px; width: 95px;"></td>
      </tr>
      <tr>
        <td colspan="2" style="padding: 2px; height: 10px; width: 256px;font-size:11px;">021-34688218</td>
      </tr>
      <tr>
        <td colspan="2" style="padding: 2px; height: 10px; width: 256px;font-size: 11px;">
          <span id="reptrData_Label6_0">0321-2910291</span></td>
        <td style="padding: 2px; height: 10px; width: 95px;"></td>
      </tr>
      <tr>
        <td colspan="2" style="padding: 2px; height: 10px; width: 256px;font-size: 11px;">
          <span id="reptrData_lblCampusEmail_0"><?php if (!empty($CompanyList->CompanyEmail)) {
                  echo $CompanyList->CompanyEmail;
              } ?></span>
        </td>
        <td style="padding: 2px; height: 10px; width: 95px;"></td>
      </tr>
      </tbody>
    </table>
  </div>
  <div class="fv-col">
    <img id="reptrData_imgLogo_0" src="<?php if (!empty($CompanyList->CompanyLogo)) {
        echo base_url('assets/dist/images/' . $CompanyList->CompanyLogo);
    } else {
        echo base_url('assets/dist/images/School.jpg');
    } ?>" style="height:25px;width:50px;">
    <table id="voucher0" style="border-collapse: collapse; width: 0%; font-size: 12px;">

      <tbody>

      <tr>
        <td><strong>
                    <span id="reptrData_lblCampusName0_0"><?php if (!empty($CompanyList->CompanyName)) {
                            echo $CompanyList->CompanyName;
                        } ?></span></strong></td>
        <td colspan="2" style="padding: 2px;text-align:right;">
          <span id="reptrData_Label2_0">Bank Al Habib<br>A/C.No: 1119-0981-002188-01-8</span></td>
      </tr>
      <tr class="fv-borderbottom">
        <td style="border-bottom: 1pt solid rgb(0, 0, 0);">Fee Challan</td>
        <td style="border-bottom: 1pt solid rgb(0, 0, 0);"></td>
        <td style="border-bottom: 1pt solid rgb(0, 0, 0);"><strong>SCHOOL's COPY</strong></td>
      </tr>
      <tr>
        <td><strong>Issue Date:<br><span id="reptrData_lblissueDate1_0"
                                         style="font-size:smaller"><?php if (!empty($Voucher->CreationDate)) {
                        echo $Voucher->CreationDate;
                    } ?></span></strong></td>
        <td style="width:16%"><strong>Due Date:<br><span id="reptrData_lblDueDate1_0"
                                                         style="font-size:smaller"><?php if (!empty($Voucher->DueDate)) {
                        echo $Voucher->DueDate;
                    } ?></span></strong></td>
      </tr>

      <tr class="fv-borderbottom">
        <td style="border-bottom: 1pt solid rgb(0, 0, 0);"></td>
        <td style="border-bottom: 1pt solid rgb(0, 0, 0);"></td>
        <td style="border-bottom: 1pt solid rgb(0, 0, 0);"></td>
      </tr>

      <tr class="fv-borderbottom">
        <td style="padding: 2px; height: 10px; width: 151px; border-bottom: 1pt solid rgb(0, 0, 0);"><strong>Student
            Name:</strong></td>
        <td style="padding: 2px; height: 10px; border-bottom: 1pt solid rgb(0, 0, 0);"><strong>
            <span id="reptrData_lblName0_0"
                  style="font-size:smaller; text-transform:uppercase"><?php if (!empty($Voucher->StudentName)) {
                    echo $Voucher->StudentName;
                } ?></span>
          </strong></td>
        <td style="padding: 2px; height: 10px; width: 95px; border-bottom: 1pt solid rgb(0, 0, 0);"><strong>C-GRN:
            <span id="reptrData_lblGrno0_0" style="font-size:smaller;"><?php if (!empty($Voucher->StudentGR)) {
                    echo $Voucher->StudentGR;
                } ?></span>
          </strong></td>
      </tr>
      <tr class="fv-borderbottom">
        <td style="padding: 2px; height: 7px; width: 151px; border-bottom: 1pt solid rgb(0, 0, 0);"><strong>Father
            Name:</strong></td>
        <td style="padding: 2px;height: 10px; border-bottom: 1pt solid rgb(0, 0, 0);"><strong>
            <span id="reptrData_lblFname0_0"
                  style="font-size:smaller; text-transform:uppercase"><?php if (!empty($Voucher->FatherName)) {
                    echo $Voucher->FatherName;
                } ?></span>
          </strong></td>
        <td style="padding: 2px; height: 10px; width: 95px; border-bottom: 1pt solid rgb(0, 0, 0);"><strong>Class:
            <span id="reptrData_lblClass0_0"
                  style=" font-size:smaller; text-transform:uppercase"><?php if (!empty($Voucher->ClassName)) {
                    echo $Voucher->ClassName;
                } ?></span>
            &nbsp;<span id="reptrData_lblSection0_0" style="font-size:smaller; text-transform:uppercase">A</span>
          </strong></td>
      </tr>
      <tr class="fv-borderbottom">
        <td style="padding: 2px; height: 10px; width: 151px; border-bottom: 1pt solid rgb(0, 0, 0);"></td>
        <td style="padding: 2px; height: 10px; border-bottom: 1pt solid rgb(0, 0, 0);"></td>
        <td style="padding: 2px; height: 10px; width: 95px; border-bottom: 1pt solid rgb(0, 0, 0);"></td>
      </tr>
      <tr class="fv-borderall fv-maintext">
        <td style="padding: 2px; height: 25px; width: 150px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
          <strong>DATE</strong></td>
        <td style="padding: 2px; height: 25px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
          <strong>NAME / DESCRIPTION</strong></td>
        <td style="padding: 2px; height: 25px; width: 94px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
          <strong>TOTAL</strong></td>
      </tr>
      <tr class="fv-borderall fv-maintext">
        <td style="padding: 2px; height: 25px;width: 150px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
          <strong>
            <span id="reptrData_lblissueDate2_0"
                  style="font-size:smaller; text-transform:uppercase"><?php if (!empty($Voucher->CreationDate)) {
                    echo $Voucher->CreationDate;
                } ?></span>
          </strong></td>
        <td style="padding: 2px; height: 25px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
          <span id="reptrData_LblFeeDescription0_0"
                style="font-size:smaller; text-transform:uppercase"><?php if (!empty($Voucher->Description)) {
                  echo $Voucher->Description;
              } ?> </span>
        </td>
        <td style="padding: 2px; height: 25px; width: 94px;  text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
          <strong>
            <span id="reptrData_lblFess0_0"
                  style="font-size:smaller; text-transform:uppercase"><?php if (!empty($Voucher->Fee)) {
                   // if ($Voucher->Dues > 0) {
                        echo $Voucher->Fee;
                  //  } else {
                    //    echo "Paid";
                //    }
                } ?></span>
          </strong></td>
      </tr>

      <?php 
        if($MonthNumber != 0)
        {
      ?>        
      <tr class="fv-borderall fv-maintext">
        <!--ANNUAL FEE-->
        <!--                $where,$table,$orderid,$orderby-->
          <?php
          $AnnualFee = $this->Admindb->getrecord(['StudentId'=>$Voucher->StudentId,'FeeMonth>='=>$PreviousDate,'Month'=>'Annual','IsActive'=>true,'IsDeleted'=>false],'fee','Dues');
          if(!empty($AnnualFee && $MonthNumber !== 0)){
              ?>
            <td colspan="2"
                style="padding: 2px; height: 25px;font-size:smaller ; width: 255px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
              ANNUAL FEE
            </td>
            <td style="padding: 2px; height: 25px; width: 94px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
              <strong>
                    <span id="reptrData_lblArrears_0"
                          style="font-size:smaller ; text-transform:uppercase"><?php echo $AnnualFee; ?></span>

              </strong></td>
              <?php
          }
          ?>
      </tr>
              <?php
          }
          ?>
      <?php if (!empty($OutStanding)) { ?>
        <tr class="fv-borderall fv-maintext">
          <td colspan="2"
              style="padding: 2px; height: 25px;font-size:smaller ; width: 255px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
            PAYABLE ARREARS
          </td>
          <td style="padding: 2px; height: 25px; width: 94px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
            <strong>
            <span id="reptrData_lblArrears_0"
                  style="font-size:smaller ; text-transform:uppercase"><?php
                if ($Voucher->Dues > 0) {
                    echo $OutStanding;
                } else {
                    echo "Paid";
                } ?></span>

            </strong></td>
        </tr>
      <?php } ?>
      <tr class="fv-borderall fv-maintext">
        <td colspan="2"
            style="padding: 2px; height: 25px; width: 255px; text-align: center;font-size:smaller; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
          PAYABLE BEFORE DUE DATE (<strong><span id="reptrData_lblDueDate2_0"><?php if (!empty($Voucher->DueDate)) {
                        if ($Voucher->Dues > 0) {
                            echo $Voucher->DueDate;
                        } else {
                            echo "Paid";
                        }
                    } ?></span>
          </strong>)
        </td>
        <td style="padding: 2px; height: 25px; width: 94px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
          <strong>
            <span id="reptrData_lblPayableFees0_0"
                  style="font-size:smaller; text-transform:uppercase"><?php if (!empty($Voucher->Fee)) {
                    if ($Voucher->Dues > 0) {
                        echo $Voucher->Fee + $Dues_OutStanding;
                    } else {
                        echo "Paid";
                    }
                } ?></span>
          </strong></td>
      </tr>
      <tr class="fv-borderall fv-maintext">
        <td colspan="2"
            style=" padding:2px; height: 25px; width: 255px; text-align: center; font-size:smaller; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
          PAYABLE AFTER DUE DATE
        </td>
        <td style="padding: 2px; height: 25px; width:94px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
          <strong>
            <span id="reptrData_lblDueFees0_0"
                  style="font-size:smaller; text-transform:uppercase"><?php if (!empty($Voucher->Fee)) {
                    if ($Voucher->Dues > 0) {
                        echo $Voucher->Fee + $Dues_OutStanding + 500;
                    } else {
                        echo "Paid";
                    }
                } ?></span>
          </strong></td>
      </tr>
      <tr>
        <td style="padding: 2px; height: 10px; width: 151px;"></td>
        <td style="padding: 2px; height: 10px;"></td>
        <td style="padding: 2px; height: 10px; width: 95px;"></td>
      </tr>
      <tr class="fv-infotext">
        <td colspan="2" style="padding: 2px; height: 10px; width: 256px; font-size: 11px;"><strong>Instruction for
            Parents:</strong></td>
        <td style="padding: 2px; height: 10px; width: 95px; font-size: 11px;"></td>
      </tr>
      <tr>
        <td colspan="3" style="padding: 2px; height: 10px; width: 355px;">1. Fee Challan for each month are provided to
          student by their
          class teacher in last week of running month. However if it is not
          received or not delivered by the child , it will be responsibility of parents to collect the fee challan
          respective campus.
        </td>
      </tr>
      <tr>
        <td style="padding: 2px; height: 10px; width: 151px;"></td>
        <td style="padding: 2px; height: 10px;"></td>
        <td style="padding: 2px; height: 10px; width: 95px;"></td>
      </tr>
      <tr>
        <td colspan="3" style="padding: 2px; height: 10px; width: 355px;">2. Rs50 will be charged incase of misplacing
          or lost of voucher.
        </td>
      </tr>
      <tr>
        <td style="padding: 2px; height: 10px; width: 151px;"></td>
        <td style="padding: 2px; height: 10px;"></td>
        <td style="padding: 2px; height: 10px; width: 95px;"></td>
      </tr>
      <tr>
        <td colspan="3" style="padding: 2px; height: 10px; width: 355px;">3. Monthly fee is non-refundable even of June
          and July.
        </td>
      </tr>
      <tr>
        <td style="padding: 2px; height: 10px; width: 151px;"></td>
        <td style="padding: 2px; height: 10px;"></td>
        <td style="padding: 2px; height: 10px; width: 95px;"></td>
      </tr>
      <tr>
        <td colspan="3" style="padding: 2px; height: 10px; width: 355px;">4. Annual fee can be paid in installment
        </td>
      </tr>
      <tr>
        <td style="padding: 2px; height: 10px; width: 151px;"></td>
        <td style="padding: 2px; height: 10px;"></td>
        <td style="padding: 2px; height: 10px; width: 95px;"></td>
      </tr>
      <tr>
        <td colspan="3" style="padding: 2px; height: 10px; width: 355px; font-size:11px;"><strong>Note: Please collect
            your computerised receipt after fee payment</strong></td>
      </tr>
      <tr>
        <td style="padding: 2px; height: 10px; width: 151px;"></td>
        <td style="padding: 2px; height: 10px;"></td>
        <td style="padding: 2px; height: 10px; width: 95px;"></td>
      </tr>
      <tr>
        <td colspan="2" style="padding: 2px; height: 10px; width: 256px;font-size:11px;">For any querries feel free to
          contact:
        </td>
        <td style="padding: 2px; height: 10px; width: 95px;"></td>
      </tr>
      <tr>
        <td colspan="2" style="padding: 2px; height: 10px; width: 256px;font-size:11px;">021-34688218</td>
      </tr>
      <tr>
        <td colspan="2" style="padding: 2px; height: 10px; width: 256px;font-size:11px;">
          <span id="reptrData_Label4_0">0321-2910291</span></td>
        <td style="padding: 2px; height: 10px; width: 95px;"></td>
      </tr>
      <tr>
        <td colspan="2" style="padding: 2px; height: 10px; width: 256px;font-size:11px;">
          <span id="reptrData_lblCampusEmail0_0"><?php if (!empty($CompanyList->CompanyEmail)) {
                  echo $CompanyList->CompanyEmail;
              } ?></span></td>
        <td style="padding: 2px; height: 10px; width: 95px;"></td>
      </tr>
      </tbody>
    </table>
  </div>
  <div class="fv-col">


    <img id="reptrData_imgLogo_0" src="<?php if (!empty($CompanyList->CompanyLogo)) {
        echo base_url('assets/dist/images/' . $CompanyList->CompanyLogo);
    } else {
        echo base_url('assets/dist/images/School.jpg');
    } ?>" style="height:25px;width:50px;">
    <table id="voucher0" style="border-collapse: collapse; width: 0%; font-size: 12px;">

      <tbody>
      <tr>
        <td><strong>
                    <span id="reptrData_lblCampusName1_0"><?php if (!empty($CompanyList->CompanyName)) {
                            echo $CompanyList->CompanyName;
                        } ?></span></strong></td>
        <td colspan="2" style="padding: 2px;text-align:right;">
          <span id="reptrData_Label2_0">Bank Al Habib<br>A/C.No: 1119-0981-002188-01-8</span></td>
      </tr>
      <tr class="fv-borderbottom">
        <td style="padding: 2px; height: 10px; width: 151px; border-bottom: 1pt solid rgb(0, 0, 0);">Fee Challan</td>
        <td style="padding: 2px; border-bottom: 1pt solid rgb(0, 0, 0);" class="auto-style3"></td>
        <td style="padding: 2px; height: 10px; width: 95px; border-bottom: 1pt solid rgb(0, 0, 0);"><strong>PARENT's
            COPY</strong></td>
      </tr>
      <tr>
        <td><strong>Issue Date:<br><span id="reptrData_lblissueDate3_0"
                                         style="text-transform:uppercase;font-size:smaller"><?php if (!empty($Voucher->CreationDate)) {
                        echo $Voucher->CreationDate;
                    } ?></span></strong></td>

        <td><strong>Due Date:<br> <span id="reptrData_lblDueDate3_0"
                                        style="text-transform:uppercase;font-size:smaller"><?php if (!empty($Voucher->DueDate)) {
                        echo $Voucher->DueDate;
                    } ?></span></strong></td>
      </tr>

      <tr class="fv-borderbottom">
        <td style="border-bottom: 1pt solid rgb(0, 0, 0);"></td>
        <td style="border-bottom: 1pt solid rgb(0, 0, 0);" class="auto-style3"></td>
        <td style="border-bottom: 1pt solid rgb(0, 0, 0);"></td>
      </tr>
      <tr class="fv-borderbottom">
        <td style="padding: 2px; height: 10px; width: 151px; border-bottom: 1pt solid rgb(0, 0, 0);"><strong>Student
            Name:</strong></td>
        <td style="padding: 2px; border-bottom: 1pt solid rgb(0, 0, 0);" class="auto-style3"><strong>
            <span id="reptrData_lblName1_0"
                  style="text-transform:uppercase;font-size:smaller"><?php if (!empty($Voucher->StudentName)) {
                    echo $Voucher->StudentName;
                } ?></span>
          </strong></td>
        <td style="padding: 2px; height: 10px; width: 95px; border-bottom: 1pt solid rgb(0, 0, 0);"><strong>C-GRN:
            <span id="reptrData_lblGrno1_0"
                  style="text-transform:uppercase;font-size:smaller"><?php if (!empty($Voucher->StudentGR)) {
                    echo $Voucher->StudentGR;
                } ?></span>
          </strong></td>
      </tr>
      <tr class="fv-borderbottom">
        <td style="padding: 2px; height: 7px; width: 151px; border-bottom: 1pt solid rgb(0, 0, 0);"><strong>Father
            Name:</strong></td>
        <td style="padding: 2px; border-bottom: 1pt solid rgb(0, 0, 0);" class="auto-style3"><strong>
            <span id="reptrData_lblFname3_0"
                  style="text-transform:uppercase;font-size:smaller"><?php if (!empty($Voucher->FatherName)) {
                    echo $Voucher->FatherName;
                } ?></span>
          </strong></td>
        <td style="padding: 2px; height: 10px; width: 95px; border-bottom: 1pt solid rgb(0, 0, 0);"><strong>Class:
            <span id="reptrData_lblClass1_0"
                  style="text-transform:uppercase;font-size:smaller"><?php if (!empty($Voucher->ClassName)) {
                    echo $Voucher->ClassName;
                } ?></span>
          </strong>&nbsp;<strong><span id="reptrData_lblSection1_0"
                                       style="text-transform:uppercase;font-size:smaller">A</span>
          </strong></td>
      </tr>
      <tr class="fv-borderbottom">
        <td style="padding: 2px; height: 10px; width: 151px; border-bottom: 1pt solid rgb(0, 0, 0);"></td>
        <td style="padding: 2px; border-bottom: 1pt solid rgb(0, 0, 0);" class="auto-style3"></td>
        <td style="padding: 2px; height: 10px; width: 95px; border-bottom: 1pt solid rgb(0, 0, 0);"></td>
      </tr>
      <tr class="fv-borderall fv-maintext">
        <td style="padding: 2px; height: 25px; width: 150px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
          <strong>DATE</strong></td>
        <td style="padding: 2px; text-align: center; text-transform: uppercase; border: 1pt solid rgb(0, 0, 0);"
            class="auto-style4"><strong>NAME / DESCRIPTION</strong></td>
        <td style="padding: 2px; height: 25px; width:94px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
          <strong>TOTAL</strong></td>
      </tr>
      <tr class="fv-borderall fv-maintext">
        <td style="padding: 2px; height: 25px;width: 150px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
          <strong>
            <span id="reptrData_lblissueDate4_0"
                  style="text-transform:uppercase;font-size:smaller"><?php if (!empty($Voucher->CreationDate)) {
                    echo $Voucher->CreationDate;
                } ?></span>
          </strong></td>
        <td style="padding: 2px; text-align: center; text-transform: uppercase; border: 1pt solid rgb(0, 0, 0);"
            class="auto-style4">
          <span id="reptrData_LblFeeDescription1_0"
                style="text-transform:uppercase;font-size:smaller"><?php if (!empty($Voucher->Description)) {
                  echo $Voucher->Description;
              } ?> </span>
        </td>
        <td style="padding: 2px; height: 25px; width:94px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
          <strong>
            <span id="reptrData_lblFess1_0"
                  style="text-transform:uppercase;font-size:smaller"><?php if (!empty($Voucher->Fee)) {
                    //if ($Voucher->Dues > 0) {
                        echo $Voucher->Fee;
                    //} else {
                      //  echo "Paid";
                    //}
                } ?></span>
          </strong></td>
      </tr>

      <tr class="fv-borderall fv-maintext">
      <?php 
        if($MonthNumber != 0)
        {
      ?>        
        <!--ANNUAL FEE-->
        <!--                $where,$table,$orderid,$orderby-->
          <?php
          $AnnualFee = $this->Admindb->getrecord(['StudentId'=>$Voucher->StudentId,'FeeMonth>='=>$PreviousDate,'Month'=>'Annual','IsActive'=>true,'IsDeleted'=>false],'fee','Dues');
          if(!empty($AnnualFee && $MonthNumber !== 0)){
              ?>
            <td colspan="2"
                style="padding: 2px; height: 25px;font-size:smaller ; width: 255px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
              ANNUAL FEE
            </td>
            <td style="padding: 2px; height: 25px; width: 94px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
              <strong>
                    <span id="reptrData_lblArrears_0"
                          style="font-size:smaller ; text-transform:uppercase"><?php echo $AnnualFee; ?></span>

              </strong></td>
              <?php
          }
          ?>
      </tr>
              <?php
          }
          ?>   <?php if (!empty($OutStanding)) { ?>
        <tr class="fv-borderall fv-maintext">
          <td colspan="2"
              style="padding: 2px; height: 25px;font-size:smaller ; width: 255px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
            PAYABLE ARREARS
          </td>
          <td style="padding: 2px; height: 25px; width: 94px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
            <strong>
            <span id="reptrData_lblArrears_0"
                  style="font-size:smaller ; text-transform:uppercase"><?php
                if ($Voucher->Dues > 0) {
                    echo $OutStanding;
                } else {
                    echo "Paid";
                } ?></span>

            </strong></td>
        </tr>
      <?php } ?>

      <tr class="fv-borderall fv-maintext">
        <td colspan="2"
            style="padding: 2px; height:25px; text-align: center;font-size:smaller; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
          PAYABLE BEFORE DUE DATE (<strong><span id="reptrData_lblDueDate4_0"><?php if (!empty($Voucher->DueDate)) {
                        if ($Voucher->Dues > 0) {
                            echo $Voucher->DueDate;
                        } else {
                            echo "Paid";
                        }
                    } ?></span>
          </strong>)
        </td>
        <td style="padding: 2px; height: 25px; width:94px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
          <strong>
            <span id="reptrData_lblPayableFees1_0"
                  style="text-transform:uppercase;font-size:smaller"><?php if (!empty($Voucher->Fee)) {
                    if ($Voucher->Dues > 0) {
                        echo $Voucher->Fee + $Dues_OutStanding;
                    } else {
                        echo "Paid";
                    }
                } ?></span>
          </strong></td>
      </tr>
      <tr class="fv-borderall fv-maintext">
        <td colspan="2"
            style=" font-size:smaller;padding: 2px;  height: 25px; text-align: center; font-size:smaller; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
          PAYABLE AFTER DUE DATE
        </td>
        <td style="padding: 2px; height: 25px; width:94px; text-align: center; text-transform: uppercase !important; border: 1pt solid rgb(0, 0, 0);">
          <strong>
            <span id="reptrData_lblDueFees1_0"
                  style="text-transform:uppercase;font-size:smaller"><?php if (!empty($Voucher->Fee)) {
                    if ($Voucher->Dues > 0) {
                        echo $Voucher->Fee + $Dues_OutStanding + 500;
                    } else {
                        echo "Paid";
                    }
                } ?></span>
          </strong></td>
      </tr>

      <tr>
        <td style="padding: 2px; height: 10px; width: 151px;"></td>
        <td style="padding: 2px; " class="auto-style3"></td>
        <td style="padding: 2px; height: 10px; width: 95px;"></td>
      </tr>
      <tr class="fv-infotext">
        <td colspan="2" style="padding: 2px; height: 10px; font-size: 11px;"><strong>Instruction for Parents:</strong>
        </td>
        <td style="padding: 2px; height: 10px; width: 95px; font-size: 11px;"></td>
      </tr>
      <tr>
        <td colspan="3" style="padding: 2px; height: 10px; width: 355px;">1. Fee Challan for each month are provided to
          student by their class teacher in last week of running month. However if it is not
          received or not delivered by the child , it will be responsibility of
          parents to collect the fee challan respective campus.
        </td>
      </tr>
      <tr>
        <td style="padding: 2px; height: 10px; width: 151px;"></td>
        <td style="padding: 2px; " class="auto-style3"></td>
        <td style="padding: 2px; height: 10px; width: 95px;"></td>
      </tr>
      <tr>
        <td colspan="3" style="padding: 2px; height: 10px; width: 355px;">2. Rs50 will be charged incase of misplacing
          or lost of voucher.
        </td>
      </tr>
      <tr>
        <td style="padding: 2px; height: 10px; width: 151px;"></td>
        <td style="padding: 2px; " class="auto-style3"></td>
        <td style="padding: 2px; height: 10px; width: 95px;"></td>
      </tr>
      <tr>
        <td colspan="3" style="padding: 2px; height: 10px; width: 355px;">3. Monthly fee is non-refundable even of June
          and July.
        </td>
      </tr>
      <tr>
        <td style="padding: 2px; height: 10px; width: 151px;"></td>
        <td style="padding: 2px; height: 10px;"></td>
        <td style="padding: 2px; height: 10px; width: 95px;"></td>
      </tr>
      <tr>
        <td colspan="3" style="padding: 2px; height: 10px; width: 355px;">4. Annual fee can be paid in installment
        </td>
      </tr>
      <tr>
        <td style="padding: 2px; height: 10px; width: 151px;"></td>
        <td style="padding: 2px; " class="auto-style3"></td>
        <td style="padding: 2px; height: 10px; width: 95px;"></td>
      </tr>
      <tr>
        <td colspan="3" style="padding: 2px; height: 10px; width: 355px;font-size:11px;"><strong>Note: Please collect
            your computerised receipt after fee payment</strong></td>
      </tr>
      <tr>
        <td style="padding: 2px; height: 10px; width: 151px;"></td>
        <td style="padding: 2px; " class="auto-style3"></td>
        <td style="padding: 2px; height: 10px; width: 95px;"></td>
      </tr>
      <tr>
        <td colspan="2" style="padding: 2px; height: 10px;font-size:11px; ">For any querries feel free to contact:</td>
        <td style="padding: 2px; height: 10px; width: 95px;"></td>
      </tr>
      <tr>
        <td colspan="2" style="padding: 2px; height: 10px; width: 256px;font-size:11px;">021-34688218</td>
      </tr>
      <tr>
        <td colspan="2" style="padding: 2px; height: 10px; width: 256px;">
          <span id="reptrData_Label5_0">0321-2910291</span></td>
        <td style="padding: 2px; height: 10px; width: 95px;"></td>
      </tr>
      <tr>
        <td colspan="2" style="padding: 2px; height: 10px; ">
          <span id="reptrData_lblCampusEmail1_0" style="font-size:11px"><?php if (!empty($CompanyList->CompanyEmail)) {
                  echo $CompanyList->CompanyEmail;
              } ?></span>
        </td>
        <td style="padding: 2px; height: 10px; width: 95px;"></td>
      </tr>
      </tbody>
    </table>

  </div>
</div>

<button type="button" class="form-control btn btn-primary" onclick="PrintVoucher()"
        style="display:none; width:6%; float:right; margin:2%">Print
</button>
<!-- <a href="<?php //echo base_url('StudentLedger'); ?>" class="form-control btn btn-primary" style="width:6%; float:right; margin:2%">Back</button> -->
<div class="footer">
  <!--ssssssssssssssssssssssssssssssssssssssssssssss -->
  <script src="<?php echo base_url('AdminLTE/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo base_url('AdminLTE/bower_components/jquery-ui/jquery-ui.min.js'); ?>"></script>
  <script>
    function PrintVoucher() {

      // mywindow.document.write(document.getElementById('printelement').innerHTML);

      var divContents = document.getElementById("printelement").innerHTML;
      var a = window.open('', 'PRINT', 'height=500, width=1300');
      // a.document.write('<html>');
      // a.document.write('<body >');
      a.document.write(divContents);
      // a.document.write('</body></html>');
      a.focus(); // necessary for IE >= 10*/
      a.document.close();
      a.print();
      a.close();
    }
  </script>
</div>
</body>
</html>