<!-- survey-part1.php -->
<h1>Survey</h1>
<p>Thanks for agreeing to answer a few questions about your organization’s project management practices.  Definitions for terms are provided by underlining the <abbr>applicable words</abbr>. There are 7 questions below:</p>

<?php echo validation_errors(); ?>

<?php echo form_open(); ?>

<div id='q1' class='question'>
<p class="title">1.	Which of the following best describes your current role within your organization? PICK ONE</p>
<ul>
	<li><input type='radio' name="q1_radio" <?php echo set_radio('q1_radio', 'IT executive, director or manager or PMO leader'); ?> value="IT executive, director or manager or PMO leader"> IT executive, director or manager or PMO leader</li>
	<li><input type='radio' name="q1_radio" <?php echo set_radio('q1_radio', 'Business executive, director or manager'); ?> value="Business executive, director or manager"> Business executive, director or manager</li>
	<li><input type='radio' name="q1_radio" <?php echo set_radio('q1_radio', 'Project Manager, Scrum Master'); ?> value="Project Manager, Scrum Master"> Project Manager, Scrum Master</li>
	<li><input type='radio' name="q1_radio" <?php echo set_radio('q1_radio', 'Project Team Member'); ?> value="Project Team Member"> Project Team Member (e.g. business analyst, architect, business representative)</li>
</div>

<div id='q2' class='question'>
<p class="title">2.	Which of the following best describes the current, overall project methodology used for <abbr title='IT-enabled business projects are defined as projects to enhance organizational capabilities through the use of information technology.'>IT-enabled business projects</abbr> in your organization?</p>
<ul>
	<li><input type='radio' name="q2_radio" <?php echo set_radio('q2_radio', 'Unstructured'); ?> value='Unstructured'> <strong>Unstructured</strong> – undocumented project management processes, driven reactively</li>
	<li><input type='radio' name="q2_radio" <?php echo set_radio('q2_radio', 'Repeatable'); ?> value='Repeatable'> <strong>Repeatable</strong> – basic project management processes established</li>
	<li><input type='radio' name="q2_radio" <?php echo set_radio('q2_radio', 'Defined'); ?> value='Defined'> <strong>Defined</strong> – project management processes established and used extensively</li>
	<li><input type='radio' name="q2_radio" <?php echo set_radio('q2_radio', 'Managed'); ?> value='Managed'> <strong>Managed</strong> – measures and controls project management processes using metrics</li>
	<li><input type='radio' name="q2_radio" <?php echo set_radio('q2_radio', 'Optimizing'); ?> value='Optimizing'> <strong>Optimizing</strong> – continuous improvement of project management processes</li>
</ul> 
</div>

<div id='q3' class='question'>
<p class="title">3.	How would you describe your organization’s current use of traditional and/or agile methodologies?  PICK ONE</p>

<table width='100%'>
	<tr>
		<td colspan="2"><strong>Traditional</strong><br>(Structured methods , UML, Use Cases, Waterfall)</td>
		<td></td>
		<td colspan="2" style="text-align: right"><strong>Agile</strong><br>(SCRUM, user stories methods)</td>
	</tr>
	<tr>
		<td colspan="2">100%</td>
		<td style="text-align: center">50/50</td>
		<td colspan="2" style="text-align: right">100%</td>
	</tr>
	<tr>
		<td width="20%"><input type='radio' name="q3_radio" value="100% traditional" <?php echo set_radio('q3_radio', '100% traditional'); ?>></td>
		<td width="20%"><input type='radio' name="q3_radio" value="75% traditional" <?php echo set_radio('q3_radio', '75% traditional'); ?>></td>
		<td width="20%" style="text-align: center"><input type='radio' name="q3_radio" value="50/50" <?php echo set_radio('q3_radio', '50/50'); ?>></td>
		<td width="20%" style="text-align: right"><input type='radio' name="q3_radio" value="75% agile" <?php echo set_radio('q3_radio', '75% agile'); ?>></td>
		<td width="20%" style="text-align: right"><input type='radio' name="q3_radio" value="100% agile" <?php echo set_radio('q3_radio', '100% agile'); ?>></td>
	</tr>
</table>


</div>

<div id='q4' class='question'>
<p class="title">4.	Overall, how satisfied are you with the current project management practices within your organization for <abbr title='IT-enabled business projects are defined as projects to enhance organizational capabilities through the use of information technology.'>IT-enabled business projects</abbr>? ON THE SCALE BELOW PICK ONE</p>



<table width='100%'>
	<tr>
		<td width='20%' style='text-align:center;'><input type='radio' name="q4_radio" <?php echo set_radio('q4_radio', 'Very Dissatisfied'); ?> value="Very Dissatisfied"></td>
		<td width='20%' style='text-align:center;'><input type='radio' name="q4_radio" <?php echo set_radio('q4_radio', 'Dissatisfied'); ?> value="Dissatisfied"></td>
		<td width='20%' style='text-align:center;'><input type='radio' name="q4_radio" <?php echo set_radio('q4_radio', 'Neutral'); ?> value="Neutral"></td>
		<td width='20%' style='text-align:center;'><input type='radio' name="q4_radio" <?php echo set_radio('q4_radio', 'Satisfied'); ?> value="Satisfied"></td>
		<td width='20%' style='text-align:center;'><input type='radio' name="q4_radio" <?php echo set_radio('q4_radio', 'Very Satisfied'); ?> value="Very Satisfied"></td>
	</tr>
	<tr>
		<td width='20%' style='text-align:center;'>Very Dissatisfied</td>
		<td width='20%' style='text-align:center;'>Dissatisfied</td>
		<td width='20%' style='text-align:center;'>Neutral</td>
		<td width='20%' style='text-align:center;'>Satisfied</td>
		<td width='20%' style='text-align:center;'>Very Satisfied</td>
	</tr>
</table>
</div>

<div id='q5' class='question'>
<p class="title">5.	When choosing methodologies for <abbr title='IT-enabled business projects are defined as projects to enhance organizational capabilities through the use of information technology.'>IT-enabled business projects</abbr>, what goals are more important for your organization? MARK ONE CIRCLE IN EACH LINE</p>
<table width='100%'>
	<tr>
		<th colspan='2' style='text-align:left;'>Strongly describes my organization's goals</th>
		<th colspan='3' style='text-align:center;'>Both goals equally important</th>
		<th colspan='2' style='text-align:right;'>Strongly describes my organization's goals</th>
	</tr>
	<tr>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5a_radio" value="1" <?php echo set_radio('q5a_radio', '1'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5a_radio" value="2" <?php echo set_radio('q5a_radio', '2'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5a_radio" value="3" <?php echo set_radio('q5a_radio', '3'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5a_radio" value="4" <?php echo set_radio('q5a_radio', '4'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5a_radio" value="5" <?php echo set_radio('q5a_radio', '5'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5a_radio" value="6" <?php echo set_radio('q5a_radio', '6'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5a_radio" value="7" <?php echo set_radio('q5a_radio', '7'); ?>></td>
	</tr>
	<tr>
		<td colspan="3" style='text-align:left;' class="sliderDivider"><abbr title='Projects are on time, on budget'>Efficiency</abbr></td>
		<td class="sliderDivider">&nbsp;</td>
		<td colspan="3" style='text-align:right;' class="sliderDivider"><abbr title='Organizational Change Capability'>Innovation</abbr></td>
	</tr>
	<tr>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5b_radio" value="1" <?php echo set_radio('q5b_radio', '1'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5b_radio" value="2" <?php echo set_radio('q5b_radio', '2'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5b_radio" value="3" <?php echo set_radio('q5b_radio', '3'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5b_radio" value="4" <?php echo set_radio('q5b_radio', '4'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5b_radio" value="5" <?php echo set_radio('q5b_radio', '5'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5b_radio" value="6" <?php echo set_radio('q5b_radio', '6'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5b_radio" value="7" <?php echo set_radio('q5b_radio', '7'); ?>></td>
	</tr>
	<tr>
		<td colspan="3" style='text-align:left;' class="sliderDivider"><abbr title='Projects are on time, on budget'>Efficiency</abbr></td>
		<td class="sliderDivider">&nbsp;</td>
		<td colspan="3" style='text-align:right;' class="sliderDivider"><abbr title='Organizational Adoption of Project Management Methods'>Project Management Maturity</abbr></td>
	</tr>
	<tr>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5c_radio" value="1" <?php echo set_radio('q5c_radio', '1'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5c_radio" value="2" <?php echo set_radio('q5c_radio', '2'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5c_radio" value="3" <?php echo set_radio('q5c_radio', '3'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5c_radio" value="4" <?php echo set_radio('q5c_radio', '4'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5c_radio" value="5" <?php echo set_radio('q5c_radio', '5'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5c_radio" value="6" <?php echo set_radio('q5c_radio', '6'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5c_radio" value="7" <?php echo set_radio('q5c_radio', '7'); ?>></td>
	</tr>
	<tr>
		<td colspan="3" style='text-align:left;' class="sliderDivider"><abbr title='Projects are on time, on budget'>Efficiency</abbr></td>
		<td class="sliderDivider">&nbsp;</td>
		<td colspan="3" style='text-align:right;' class="sliderDivider"><abbr title='Project meets Stakeholder Objectives'>Responsiveness</abbr></td>
	</tr>
	<tr>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5d_radio" value="1" <?php echo set_radio('q5d_radio', '1'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5d_radio" value="2" <?php echo set_radio('q5d_radio', '2'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5d_radio" value="3" <?php echo set_radio('q5d_radio', '3'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5d_radio" value="4" <?php echo set_radio('q5d_radio', '4'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5d_radio" value="5" <?php echo set_radio('q5d_radio', '5'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5d_radio" value="6" <?php echo set_radio('q5d_radio', '6'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5d_radio" value="7" <?php echo set_radio('q5d_radio', '7'); ?>></td>
	</tr>
	<tr>
		<td colspan="3" style='text-align:left;' class="sliderDivider"><abbr title='Organizational Change Capability'>Innovation</abbr></td>
		<td class="sliderDivider">&nbsp;</td>
		<td colspan="3" style='text-align:right;' class="sliderDivider"><abbr title='Organizational Adoption of Project Management Methods'>Project Management Maturity</abbr></td>
	</tr>
	<tr>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5e_radio" value="1" <?php echo set_radio('q5e_radio', '1'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5e_radio" value="2" <?php echo set_radio('q5e_radio', '2'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5e_radio" value="3" <?php echo set_radio('q5e_radio', '3'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5e_radio" value="4" <?php echo set_radio('q5e_radio', '4'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5e_radio" value="5" <?php echo set_radio('q5e_radio', '5'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5e_radio" value="6" <?php echo set_radio('q5e_radio', '6'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5e_radio" value="7" <?php echo set_radio('q5e_radio', '7'); ?>></td>
	</tr>
	<tr>
		<td colspan="3" style='text-align:left;' class="sliderDivider" class="sliderDivider"><abbr title='Organizational Change Capability'>Innovation</abbr></td>
		<td class="sliderDivider">&nbsp;</td>
		<td colspan="3" style='text-align:right;' class="sliderDivider"><abbr title='Project meets Stakeholder Objectives'>Responsiveness</abbr></td>
	</tr>
	<tr>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5f_radio" value="1" <?php echo set_radio('q5f_radio', '7'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5f_radio" value="2" <?php echo set_radio('q5f_radio', '7'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5f_radio" value="3" <?php echo set_radio('q5f_radio', '7'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5f_radio" value="4" <?php echo set_radio('q5f_radio', '7'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5f_radio" value="5" <?php echo set_radio('q5f_radio', '7'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5f_radio" value="6" <?php echo set_radio('q5f_radio', '7'); ?>></td>
		<td width='14.28%' style='text-align:center;'><input type='radio' name="q5f_radio" value="7" <?php echo set_radio('q5f_radio', '7'); ?>></td>
	</tr>
	<tr>
		<td colspan="3" style='text-align:left;'><abbr title='Organizational Adoption of Project Management Methods'>Project Management Maturity</abbr></td>
		<td>&nbsp;</td>
		<td colspan="3" style='text-align:right;'><abbr title='Project meets Stakeholder Objectives'>Responsiveness</abbr></td>
	</tr>
</table>
</div>

<div id='q6' class='question'>
<p class="title">6.	If you responded above that your organization used agile or a combination of agile and waterfall practices, when did your organization first start using agile methods within <abbr title='IT-enabled business projects are defined as projects to enhance organizational capabilities through the use of information technology.'>IT-enabled business projects</abbr>?</p>
<ul>
	<li><input type='radio' name="q6_radio" value="In the last year" <?php echo set_radio('q6_radio', 'In the last year'); ?>> Within the last year</li>
	<li><input type='radio' name="q6_radio" value="2 yrs ago" <?php echo set_radio('q6_radio', '2 yrs ago'); ?>> Approximately 2 years ago</li>
	<li><input type='radio' name="q6_radio" value="3 yrs ago" <?php echo set_radio('q6_radio', '3 yrs ago'); ?>> Approximately 3 years ago</li>
	<li><input type='radio' name="q6_radio" value="4 yrs ago" <?php echo set_radio('q6_radio', '4 yrs ago'); ?>> Approximately 4 years ago</li>
	<li><input type='radio' name="q6_radio" value="5 or more yrs ago" <?php echo set_radio('q6_radio', '5 or more yrs ago'); ?>> Five or more years ago</li>
	<li><input type='radio' name="q6_radio" value="N/A" <?php echo set_radio('q6_radio', 'N/A', TRUE); ?>> <strong>Not applicable</strong></li>
</ul>
</div>

<div id='q7' class='question'>
<p class="title">7.	If you responded above that your organization used agile or a combination of agile and waterfall practices, what were the primary reasons for the organization to adopt agile methods? You may add as many as you wish.</p>

e.g. speed up project delivery, respond to change
<p><input type='text' id='q7_text'><input type='button' value='Add' id='q7_addButton'></p>
<ul class='bullet' id='q7_list'>
</ul>
</div>

<div class='question'>
<p class="title">Submission</p>
<p>If you have finished the questions, please submit the survey and we will show you how your answers compare with the rest in our sample.</p>

<input type='submit' name='toPartOneConfirm' value='Submit &amp; View Result' class="bigButton">

<p>If you have any questions or concerns about this research, please contact Dr. Reich at <a href='mailto:Blaize_Reich@sfu.ca'>Blaize_Reich@sfu.ca</a> or Dr. Gemino at <a href='mailto:Andrew_Gemino@sfu.ca'>Andrew_Gemino@sfu.ca</a>, or our Associate Dean of Research at <a href='Olga_Volkoff@sfu.ca'>Olga_Volkoff@sfu.ca</a></p>
</div>
</form>