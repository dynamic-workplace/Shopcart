<?php

namespace App\Models\Admin\Products\Mobile;

use Illuminate\Database\Eloquent\Model;

class MobileDetails extends Model
{
    protected $fillable = ["mobile_brand_id","product_id","model_name","model_number","in_the_box","color","browse_type","sim_type","hybrid_sim","touchscreen","otg","sound_enhancements","display_size","resolution","resolution_type","gpu","display_type","display_features","other_display_features","os","processor_type","processor_core","clock_speed","operation_freq","internal_storage","ram","expanded_storage","supported_memory_type","memory_slot_type","call_log_memeory","primary_camera_available","primary_camera","primary_camera_features","optical_zoom","secondary_camera_available","secondary_camera","secondary_camera_features","flash","hd_recording","video_recording","video_recording_resolution","digital_zoom","frame_rate","dual_camera_lens","network_type","supported_networks","internet_connectivity","micro_usb","bluetooth_support","bluetooth_version","wifi","wifi_version","nfc","usb_connectivity","audio_jack","gps_support","sim_size","removable_battery","graphics_ppi","sensors","other_features","audio_formats","video_formats","battery_capacity","width","height","depth","weight","warranty_summery","price"];
}
