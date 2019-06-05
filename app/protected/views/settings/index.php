
    <div class="navbar">
      <a href="/messages" class="navbar_place ">Feed</a>
      <a href="/" class="navbar_users">Users</a>
	  <a href="/settings" class="navbar_settings active">Settings</a>
    </div>
    <div class="title_block">
      <div class="page_title">Settings</div>
    </div>
    <div class="line_block">
      <div class="color_blue color_line_block" style="width:0%"></div>
      <div class="color_red color_line_block" style="width:0%"></div>
    </div>
  </div>
</header>

  <div class="content">
    <div class="center " >
      <div class=" ijs_content" url="<?php echo Yii::app()->params->server_path?>/api/settings/5cc2d4d067c2ffe4d6162f58" action="view" method="GET" model="data" model-id="row_model">
          <div class="order_view_block">
            <div class="order_information_block">
                <div class="user_edit_block order_update">
                  <div class="one_line_row">
                      <div class="one_row">
                          <div class="input_title">Title</div>
						  <input type="text" data-name="title" name="title">
                      </div>
                  </div>
                </div>
            </div>
          </div>
		  <div class="order_view_block">
            <div class="order_information_block">
                <div class="user_edit_block order_update">
                  <div class="one_line_row">
                      <div class="one_row">
                          <div class="input_title">Header</div>
						  <input type="text" data-name="header" name="header">
                      </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="user_edit_block">
              <div class="content_title">Logo</div>
              <div class="logo_block" data-name="files" data-callback="view_portfolio1" data-params='{}'>
                  <input type="file" dataName="logo" style="display: none;"/>
                  <input  type="hidden" dataName="base64p"/>
                  <div class="add_logo_block"><i></i></div>
              </div>
          </div>
		  <div class="user_edit_block">
              <div class="content_title">Background</div>
              <div class="background_block" data-name="files" data-callback="view_portfolio2" data-params='{}'>
                  <input type="file" dataName="background" style="display: none;"/>
                  <input  type="hidden" dataName="base64p"/>
                  <div class="add_background_block"><i></i></div>
              </div>
          </div>
        </div>
    </div>

    <div class="center">
        <div class="hr"></div>
        <div class="control_block_btn">
            <div class="control_btn green_btn model_settings_save" data-callback="before_save" model-id="order_change" data-event="click"
                model-action='update'>Save</div>
            <div class="control_btn btn_back">Cancel</div>
        </div>
    </div>
  </div>
  
  
    <div class="background_fixed_block model_save_popup">
      <div class="popup_block_admin">
          <div class='popup_title'>Change save</div>
          <div class="popup_block">
            <hr>
            <div class="control_block_btn">
                <div class="control_btn green_btn close_popup">Ok</div>
            </div>
          </div>
      </div>
  </div>