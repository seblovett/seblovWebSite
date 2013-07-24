<?xml version="1.0" encoding="ISO-8859-1"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:param name="page"/>

	<xsl:template match="/">

		<div class="body">

			<xsl:variable name="numPerPage">5</xsl:variable>
			<xsl:variable name="startNumber" select="($page - 1) * $numPerPage + 1"/>
			
			<xsl:variable name="endNum" select="$startNumber + $numPerPage"/>
			


			<xsl:call-template name="Loop">
				<xsl:with-param name="number" select="$startNumber"/>
				<xsl:with-param name="endNumber" select="$endNum"/>
			</xsl:call-template>
			<br/>
			<br/>
			<!-- next page previous page links -->
			<table width="300">
			<xsl:variable name="prevPage">
				<xsl:value-of select="$page +1"/>
			</xsl:variable>
			<xsl:if test="$endNum &lt; (count(//project)+1)">
				
					<a href="?page={$prevPage}"><img src="Images/link_minus.jpg"/></a>
				
			</xsl:if>
			
			<xsl:if test="$page &gt; 1">
				<xsl:variable name="nextPage">
					<xsl:value-of select="$page - 1"/>
				</xsl:variable>
				
					<a href="?page={$nextPage}"><img src="Images/link_plus.jpg"/></a>
				
			</xsl:if>
			
			</table>
		</div>
		
	</xsl:template>

	<xsl:template name="Loop">
		<xsl:param name="number"/>
		<xsl:param name="endNumber"/>
		<xsl:if test="$number != $endNumber">
			<xsl:if test="//project[$number]">
				<div id="featured">
					<h3>
						<xsl:value-of select="//project[$number]/name"/>
					</h3>
					<p class="blog"><xsl:copy-of select="//project[$number]/description"/></p><!-- BUG does not like <iframe ...> tags-->

					<xsl:call-template name="Loop">
						<xsl:with-param name="number" select="$number + 1"/>
						<xsl:with-param name="endNumber" select="$endNumber"/>
					</xsl:call-template>
				</div>
			</xsl:if>
		</xsl:if>
	</xsl:template>
</xsl:stylesheet>