<?xml version="1.0" encoding="ISO-8859-1"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:param name="page"/>
	<xsl:variable name="numPerPage">5</xsl:variable>
	<xsl:template match="/">


		
		<xsl:variable name="startNumber" select="($page - 1) * $numPerPage + 1"/>

		<xsl:variable name="endNum" select="$startNumber + $numPerPage"/>



		<xsl:call-template name="Loop">
			<xsl:with-param name="number" select="$startNumber"/>
			<xsl:with-param name="endNumber" select="$endNum"/>
		</xsl:call-template>
		<br/>
		<br/>
		<xsl:call-template name="PageLinks">
			<xsl:with-param name="endNum" select="$endNum"/>
			<xsl:with-param name="startNum" select="$startNumber"/>
		</xsl:call-template>

	</xsl:template>
	<xsl:template name="PageLinks">
		<xsl:param name="endNum"/>
		<xsl:param name="startNum"/>
		
		<!-- next page previous page links -->
		<ul class="paging">
			<xsl:variable name="prevPage">
				<xsl:value-of select="$page -1"/>
			</xsl:variable>
			<xsl:if test="1 &lt; $page">
				<li>
					<a href="?page=1">&lt;&lt;&lt;</a>
				</li>
				<li>
					<a href="?page={$prevPage}">
					Previous Page
					</a>
				</li>
			</xsl:if>
			
			<xsl:call-template name="PageLoop">
				<xsl:with-param name="NumPages" select="floor((count(//project)) div 5) + 2"/> <!-- plus 2 as arithmetic is one lower than needed, and loop needs one greater-->
				<xsl:with-param name="CurPage" select="1"/>
			</xsl:call-template>
			<xsl:if test="($page * $numPerPage) &lt; (count(//project)+1)">
				<xsl:variable name="nextPage">
					<xsl:value-of select="$page + 1"/>
				</xsl:variable>
				<li>
					<a href="?page={$nextPage}">
					Next Page
					</a>
				</li>
				<li>
					<a href="?page={floor((count(//project)) div 5) + 1}">
					&gt;&gt;&gt;
					</a>
				</li>
			</xsl:if>	
		</ul>
	
	</xsl:template>
	<xsl:template name="PageLoop">
		<xsl:param name="NumPages"/>
		<xsl:param name="CurPage"/><!-- count for the loop-->
		
		<xsl:if test="$NumPages != $CurPage">
			<xsl:choose>
				<xsl:when test="$CurPage = $page">
					<li><xsl:value-of select="$CurPage"/></li>
				</xsl:when>
				<xsl:otherwise>
					<li><a href="?page={$CurPage}"><xsl:value-of select="$CurPage"/></a></li>
				</xsl:otherwise>
			</xsl:choose>
			<xsl:call-template name="PageLoop">
				<xsl:with-param name="NumPages" select="$NumPages"/>
				<xsl:with-param name="CurPage" select="$CurPage + 1"/>
			</xsl:call-template>
		</xsl:if>
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
						<xsl:if test="//project[$number]/link">
							<a href="{//project[$number]/link}"><img src="images/link_plus.jpg"/></a>
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