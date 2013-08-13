<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {
	function __construct()
    {
        parent::__construct();
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
    }
	public function index()
	{
			$prefs = array (
			'start_day'    => 'sunday',
            'month_type'   => 'long',
            'day_type'     => 'short',
			'show_next_prev'=>TRUE,
			'next_prev_url'=>base_url().'prototypes/schedule/show/'
        );
		
$prefs['template'] = '

   {table_open}<table class="table table-bordered table-striped" border="0" cellpadding="0" cellspacing="0">{/table_open}

   {heading_row_start}<tr>{/heading_row_start}

   {heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
   {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
   {heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

   {heading_row_end}</tr>{/heading_row_end}

   {week_row_start}<tr>{/week_row_start}
   {week_day_cell}<td>{week_day}</td>{/week_day_cell}
   {week_row_end}</tr>{/week_row_end}

   {cal_row_start}<tr>{/cal_row_start}
   {cal_cell_start}<td>{/cal_cell_start}

   {cal_cell_content}<a href="{content}"> <span class="badge">{day}</span></a>
  
   {/cal_cell_content}
   {cal_cell_content_today}<div class="highlight"><a href="{content}">{day}</a></div>{/cal_cell_content_today}

   {cal_cell_no_content}{day}{/cal_cell_no_content}
   {cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}

   {cal_cell_blank}&nbsp;{/cal_cell_blank}

   {cal_cell_end}</td>{/cal_cell_end}
   {cal_row_end}</tr>{/cal_row_end}

   {table_close}</table>{/table_close}
';

		
		
		$this->load->library('calendar',$prefs);
		
		// catch the year segment
		if($this->uri->segment(4)){
			$year = $this->uri->segment(4);
		}else {
			$year = date('Y');
		}
		// catch the month segment
		if($this->uri->segment(4)){
			$month = $this->uri->segment(5);
		}else {
			$month = date('m');
		}
		
		// set data - days with links
		/*
		By default it is assumed that your array will contain links. 
		In the section that explains the calendar template below you'll 
		see how you can customize how data passed to your cells is handled 
		so you can pass different types of information.
		*/
		$data = array(
               3  => base_url().'prototypes/schedule/view/'.$year.'/'.$month.'/03/',
               7  => base_url().'prototypes/schedule/view/'.$year.'/'.$month.'/07/',
               13 => base_url().'prototypes/schedule/view/'.$year.'/'.$month.'/13/',
               26 => base_url().'prototypes/schedule/view/'.$year.'/'.$month.'/26/'
             );
		$this->data['calendar'] = $this->calendar->generate($year,$month,$data);
		
		
		
		
		/* template */
		$this->data['head_title'] = "Dashboard";
		$this->load->view('admin/view_index',$this->data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */