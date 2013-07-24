<?xml version="1.0" encoding="ISO-8859-1"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:param name="page"/>

	<xsl:template match="/">


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
		<ul class="paging">
			<xsl:variable name="prevPage">
				<xsl:value-of select="$page +1"/>
			</xsl:variable>
			<xsl:if test="$endNum &lt; (count(//project)+1)">
				<li>
					<a href="?page={$prevPage}">
					Previous Page
					</a>
				</li>
			</xsl:if>
			<li><a>-------------</a></li>
			<xsl:if test="$page &gt; 1">
				<xsl:variable name="nextPage">
					<xsl:value-of select="$page - 1"/>
				</xsl:variable>
				<li>
					<a href="?page={$nextPage}">
					Next Page
					</a>
				</li>
			</xsl:if>	
		</ul>

	</xsl:template>

	<xsl:template name="Loop">
		<xsl:param name="number"/>
		<xsl:param name="endNumber"/>
		<xsl:if test="$number != $endNumber">
			<xsl:if test="//project[$number]">
				<li>
					<xsl:if test="//project[$number]/image">
						<div class="featured">
							<img src="{//project[$number]/image/src}" alt="{//project[$number]/image/src}" width="260px" height="260px"/>

						</div>
					</xsl:if>
					<div>
						<h3>
							<xsl:value-of select="//project[$number]/name"/>
						</h3>
						<p>
							<xsl:copy-of select="//project[$number]/description"/>
						</p>
						<!-- BUG does not like <iframe ...> tags-->
						<xsl:if test="//project[$number]/info">
							<img src="images/button-more.jpg"/>
						</xsl:if>
					</div>
				</li><br/>
				<img src="images/separator.jpg"/>
				<xsl:call-template name="Loop">
					<xsl:with-param name="number" select="$number + 1"/>
					<xsl:with-param name="endNumber" select="$endNumber"/>
				</xsl:call-template>

			</xsl:if>
		</xsl:if>
	</xsl:template>
</xsl:stylesheet>