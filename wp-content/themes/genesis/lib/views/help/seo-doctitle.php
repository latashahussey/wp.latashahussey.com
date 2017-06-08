<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package StudioPress\Genesis
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/genesis/
 */

?>
<h3><?php esc_html_e( 'Doctitle Settings', 'genesis' ); ?></h3>
<p>
	<?php
	/* translators: Opening and closing strong tags. */
	printf( esc_html__( '%sAppend Site Description%s will insert the site description from your General Settings after the title on your home page.', 'genesis' ), '<strong>', '</strong>' );
	?>
</p>
<p>
	<?php
	/* translators: Opening and closing strong tags. */
	printf( esc_html__( '%sAppend Site Name%s will put the site name from the General Settings after the title on inner page.', 'genesis' ), '<strong>', '</strong>' );
	?>
</p>
<p>
	<?php
	/* translators: Opening and closing strong tags. */
	printf( esc_html__( '%sDoctitle Append Location%s determines which side of the title to add the previously mentioned items.', 'genesis' ), '<strong>', '</strong>' );
	?>
</p>
<p>
	<?php
	/* translators: Opening and closing strong tags. */
	printf( esc_html__( 'The %sDoctitle Separator%s is the character that will go between the title and appended text.', 'genesis' ), '<strong>', '</strong>' );
	?>
</p>
