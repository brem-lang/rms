<!DOCTYPE html>
<html lang="en">
 
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
 
</head>
 
<style>
 
* { margin: 0; padding: 0; }
body { font: 14px/1.4 Georgia, serif; }
#page-wrap { width: 680px; margin: 0 auto; }
textarea { border: 0; font: 14px Georgia, Serif; overflow: hidden; resize: none; }
table { border-collapse: collapse; }
table td, table th { border: 1px solid black; padding: 1px; }
table td.borderless, table th.borderless { border: 0px solid black; padding: 1px; }
table.borderless{ border: 0px solid black; padding: 1px;}
#header { height: 70px; width: 100%; margin: 20px 0; text-align: center; color: white; font: bold 15px Arial, Sans-Serif; text-decoration: uppercase; letter-spacing: 15px; padding: 8px 0px; }
#title { height: 15px; width: 100%; margin: 20px 0; background: #222; text-align: center; color: white; font: bold 15px Arial, Sans-Serif; text-decoration: uppercase; letter-spacing: 15px; padding: 8px 0px; }
#address { width: 250px; height: 150px; float: left; }
#customer { overflow: hidden; }
#logo { text-align: right; float: right; position: relative; margin-top: 1px; max-width: 570px; max-height: 130px; overflow: hidden; }
#items { clear: both; width: 100%; margin: 5px 0 0 0; border: 1px solid black; }
#items th { background: #eee; }
#items textarea { width: 80px; height: 50px; }
#items tr.item-row td { border: 0; vertical-align: top; }
#items td.description { width: 300px; }
#items td.item-name { width: 175px; }
#items td.description textarea, #items td.item-name textarea { width: 100%; }
#items td.total-line { border-right: 0; text-align: right; }
#items td.total-value { border-left: 0; padding: 10px; }
#items td.total-value textarea { height: 20px; background: none; }
#items td.balance { background: #eee; }
#items td.blank { border: 0; }
#terms { text-align: left; margin: 15px 0 0 0; }
p.sub {
  font-size:10px;
}
#meta { margin-top: 0px; width: 300px; float: left; }
#meta-right { margin-top: 0px; width: 200px; float: right; }
#footer { margin-top: 0px; width: 230px; float: right; }
 
.grid-container {
  display: grid;
  grid-template: 150px / auto auto auto;
  grid-gap: 10px;
  padding: 10px;
}
.grid-container > div {
  text-align: center;
}
 
.contentText {
    text-align: center;
    margin-top: -20px;
    font-size:15px;
  }
/* #meta td { text-align: left;  } */
/* #meta td.meta-head { text-align: left; background: #eee; font-size: 15px } */
#line { text-transform: uppercase; font: 13px Helvetica, Sans-Serif; letter-spacing: 10px; border-bottom: 1px solid black; padding: 1 0 8px 0; margin: 1  8px 0; }
</style>
<body>
 
	<div id="page-wrap">
        <h1 id="title" >
            Memorandum
        </h1>
        <table id="meta">
            <tr>
                <td class="borderless"><h6>Date</h6></td>
                <td class="borderless"><div><p class="sub">{{date('m-d-Y', strtotime($memorandum->created_at));}}</p></div></td>
            </tr>
            <tr>
                <td class="borderless"><h6>ID No.</h6></td>
                <td class="borderless"><div><p class="sub">{{ $memorandum->id_no }}</p></div></td>
            </tr>
            <tr>
                <td class="borderless"><h6>Name of Employee</h6></td>
                <td class="borderless"><div><p class="sub">{{ $memorandum->name_of_employee }}</p></div></td>
            </tr>
            <tr>
                <td class="borderless"><h6>Department</h6></td>
                <td class="borderless"><div><p class="sub">{{ $memorandum->department }}</p></div></td>
            </tr>
            <tr>
                <td class="borderless"><h6>Section</h6></td>
                <td class="borderless"><div><p class="sub">{{ $memorandum->section }}</p></div></td>
            </tr>
        </table>

        <div id="identity">
          <div id="logo">
            <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(90)->generate($memorandum->document_series_no)) !!} ">
            <p class="sub">{{ $memorandum->document_series_no }}</p>
          </div>
      </div>
 
		<div style="clear:both"></div>
        <table id="meta">
            <tr>
                <td class="borderless"><h6>Asset Code</h6></td>
                <td class="borderless"><div><p class="sub">{{ $memorandum->asset_code }}</p></div></td>
            </tr>
            <tr>
                <td class="borderless"><h6>Asset Type</h6></td>
                <td class="borderless"><div><p class="sub">{{ $memorandum->asset_type }}</p></div></td>
            </tr>
            <tr>
                <td class="borderless"><h6>Asset Description</h6></td>
                <td class="borderless"><div><p class="sub">{{ $memorandum->asset_description }}</p></div></td>
            </tr>
            <tr>
                <td class="borderless"><h6>Asset Serial No.</h6></td>
                <td class="borderless"><div><p class="sub">{{ $memorandum->asset_serial_no }}</p></div></td>
            </tr>
            <tr>
                <td class="borderless"><h6>Asset Value</h6></td>
                <td class="borderless"><div><p class="sub">{{ $memorandum->asset_value }}</p></div></td>
            </tr>
        </table>

        <div style="clear: both"></div>
        <br />
        <table id="meta">
          <tr>
            <td class="borderless"><h6>Prepared by</h6></td>
            <td class="borderless">
              <div><p class="sub">{{ $memorandum->prepared_by }}</p></div>
            </td>
          </tr>
          <tr>
            <td class="borderless"><h6>Approved by</h6></td>
            <td class="borderless">
              <div><p class="sub">{{ $memorandum->approved_by }}</p></div>
            </td>
          </tr>
          <tr>
            <td class="borderless"><h6>Noted by</h6></td>
            <td class="borderless">
              <div><p class="sub">{{ $memorandum->noted_by }}</p></div>
            </td>
          </tr>
          <tr>
            <td class="borderless"><h6>Released by</h6></td>
            <td class="borderless">
              <div><p class="sub">{{ $memorandum->released_by }}</p></div>
            </td>
          </tr>
          <tr>
            <td class="borderless"><h6>Checked by</h6></td>
            <td class="borderless">
              <div><p class="sub">{{ $memorandum->checked_by }}</p></div>
            </td>
          </tr>
        </table>
  

	</div>
</body>
 
</html>