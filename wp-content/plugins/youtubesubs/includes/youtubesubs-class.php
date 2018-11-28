<?php

/**
 * Adds Youtube_Subs widget.
 */
class Youtube_subs_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'Youtubesubs_widget', // Base ID	
			esc_html__( 'Widget YouTube Subs', 'yts_domain' ), // Name
			array( 'description' => esc_html__( 'Widget to display Youtube subs', 'yts_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	    
	public function widget( $args, $instance ) {
		echo $args['before_widget'];  //whatever you want to display before the widget(<div>,etc)
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		//echo "<p>instance id='{$instance['id']}'</p>";
        
        //Widget Content Output
        echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/'.$instance['id'].'" controls=1&autoplay=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
		
		echo $args['after_widget'];  //whatever you want to display after the widget(</div>,etc)
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Youtube subs', 
		'yts_domain_domain' );
		
        
		
		$id = ! empty( $instance['title'] ) ? $instance['$id'] : esc_html__( 'tkweb', 'yts_domain_domain' );
		?>



     <!--Title  -->

		<p>
		   <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">
              <?php esc_attr_e( 'title:', 'yts_domain_domain' ); ?>
           
           </label> 

		   <input
              class="widefat" 
              id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
              name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>"
              type="yts_domain" 
              value="<?php echo esc_attr( $title ); ?>">
		</p>

	



	<!--id-->

	<p>
	   <label for="<?php echo esc_attr( $this->get_field_id( 'id' ) ); ?>">
		  <?php esc_attr_e( 'id:', 'yts_domain_domain' ); ?>
	   
	   </label> 
	   <input
		  class="widefat" 
		  id="<?php echo esc_attr( $this->get_field_id( 'id' ) ); ?>"
		  name="<?php echo esc_attr( $this->get_field_name( 'id' ) ); ?>"
		  type="yts_domain" 
		  value="<?php echo esc_attr( $id ); ?>">
	</p>

	<?php 
  }


	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();

		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';


		$instance['id'] = ( ! empty( $new_instance['id'] ) ) ? strip_tags( $new_instance['id'] ) : '';

		return $instance;
	}

} // class youtube_Widget