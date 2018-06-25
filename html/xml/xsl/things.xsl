<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
	xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
	xmlns:xlink="http://www.w3.org/1999/xlink">

	<xsl:template match="*[@xlink:href]">
		<xsl:apply-templates select="document(@xlink:href)"/>
	</xsl:template>

	<xsl:template match="loseActions">
		<xsl:for-each select="loseAction">
			<div class="teal text-white padding-4">
				<p><xsl:apply-templates/></p>
			</div>
		</xsl:for-each>
	</xsl:template>

	<xsl:template match="winActions">
		<xsl:for-each select="winAction">
			<div class="red text-white padding-4"><xsl:apply-templates/></div>
		</xsl:for-each>
	</xsl:template>

	<xsl:template match="strong">
		<strong><xsl:apply-templates/></strong>
	</xsl:template>

	<xsl:template match="b">
		<b><xsl:apply-templates/></b>
	</xsl:template>

	<xsl:template match="i">
		<i><xsl:apply-templates/></i>
	</xsl:template>

	<xsl:template match="em">
		<em><xsl:apply-templates/></em>
	</xsl:template>

	<xsl:template match="div">
		<div><xsl:apply-templates/></div>
	</xsl:template>

	<xsl:template match="/">
		<xsl:apply-templates/>
	</xsl:template>

	<xsl:template match="math">
		<math><xsl:apply-templates/></math>
	</xsl:template>

	<xsl:template match="mrow">
		<mrow><xsl:apply-templates/></mrow>
	</xsl:template>

	<xsl:template match="mfenced">
		<mfenced><xsl:apply-templates/></mfenced>
	</xsl:template>

	<xsl:template match="mtable">
		<mtable><xsl:apply-templates/></mtable>
	</xsl:template>

	<xsl:template match="mtr">
		<mtr><xsl:apply-templates/></mtr>
	</xsl:template>

	<xsl:template match="mtd">
		<mtd><xsl:apply-templates/></mtd>
	</xsl:template>

	<xsl:template match="mi">
		<mi><xsl:apply-templates/></mi>
	</xsl:template>

	<xsl:template match="mo">
		<mo><xsl:apply-templates/></mo>
	</xsl:template>
</xsl:stylesheet>
