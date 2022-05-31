<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - Lumorah</title>
        <link rel="icon" type="image/x-icon" href="Images/monkeylogo.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <style><?php include 'CSS\newkanjis.css'?></style>
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.php">Lumorah</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <?php 
                if(isset($_SESSION["useruid"])) {
                    echo "<li><a href='homepage.php'>Homepage </a></li>";
                    echo "<li><a href='profile.php'>Profile </a></li>";
                    echo "<li><a href='includes/logout.inc.php'> Log out </a></li>";
                }
                else {
                    header("location: ../luhan/login.php");
                }
            ?>
                        </ul>
                    </div>
                </div>
            </nav>
    <center> 
        <img src="./Images/logo2.png" id="icon"> <br><br>

        <div class="slideshow-container">
            <div class="mySlides">
                <button class="button button1" onclick="window.location.href='Levels/level1.php'" ;>1</button>
                <button class="button button2" onclick="window.location.href='Levels/level2.php'" ;>2</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>3</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>4</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>5</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>6</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>7</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>8</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>9</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>10</button>
                <br>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>11</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>12</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>13</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>14</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>15</button>
                <br>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>16</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>17</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>18</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>19</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>20</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>21</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>22</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>23</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>24</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>25</button>
                <br>
                <button class="button button1" onclick="window.location.href='newkanjis.html'" ;>26</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>27</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>28</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>29</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>30</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>31</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>32</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>33</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>34</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>35</button>
                <br>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>36</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>37</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>38</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>39</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>40</button>
                <br>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>41</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>42</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>43</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>44</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>45</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>46</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>47</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>48</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>49</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>50</button>
            </div>

            <div class="mySlides">
                <button class="button button1" onclick="window.location.href='Levels/level1.php'" ;>51</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>52</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>53</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>54</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>55</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>56</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>57</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>58</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>59</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>60</button>
                <br>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>61</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>62</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>63</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>64</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>65</button>
                <br>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>66</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>67</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>68</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>69</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>70</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>71</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>72</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>73</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>74</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>75</button>
                <br>
                <button class="button button1" onclick="window.location.href='newkanjis.html'" ;>76</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>77</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>78</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>79</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>80</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>81</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>82</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>83</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>84</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>85</button>
                <br>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>86</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>87</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>88</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>89</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>90</button>
                <br>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>91</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>92</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>93</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>94</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>95</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>96</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>97</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>98</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>99</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>100</button>
            </div>

            <div class="mySlides">
                <button class="button button1" onclick="window.location.href='Levels/level1.php'" ;>101</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>102</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>103</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>104</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>105</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>106</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>107</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>108</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>109</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>110</button>
                <br>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>111</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>112</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>113</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>114</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>115</button>
                <br>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>116</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>117</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>118</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>119</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>120</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>121</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>122</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>123</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>124</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>125</button>
                <br>
                <button class="button button1" onclick="window.location.href='newkanjis.html'" ;>126</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>127</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>128</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>129</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>130</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>131</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>132</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>133</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>134</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>135</button>
                <br>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>136</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>137</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>138</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>139</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>140</button>
                <br>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>141</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>142</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>143</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>144</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>145</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>146</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>147</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>148</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>149</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>150</button>
            </div>

            <div class="mySlides">
                <button class="button button1" onclick="window.location.href='Levels/level1.php'" ;>151</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>152</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>153</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>154</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>155</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>156</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>157</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>158</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>159</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>160</button>
                <br>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>161</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>162</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>163</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>164</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>165</button>
                <br>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>166</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>167</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>168</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>169</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>170</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>171</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>172</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>173</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>174</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>175</button>
                <br>
                <button class="button button1" onclick="window.location.href='newkanjis.html'" ;>176</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>177</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>178</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>179</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>180</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>181</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>182</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>183</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>184</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>185</button>
                <br>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>186</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>187</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>188</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>189</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>190</button>
                <br>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>191</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>192</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>193</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>194</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>195</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>196</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>197</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>198</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>199</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>200</button>
            </div>

            <div class="mySlides">
                <button class="button button1" onclick="window.location.href='Levels/level1.php'" ;>201</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>202</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>203</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>204</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>205</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>206</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>207</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>208</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>209</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>210</button>
                <br>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>211</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>212</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>213</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>214</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>215</button>
                <br>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>216</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>217</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>218</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>219</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>220</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>221</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>222</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>223</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>224</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>225</button>
                <br>
                <button class="button button1" onclick="window.location.href='newkanjis.html'" ;>226</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>227</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>228</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>229</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>230</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>231</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>232</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>233</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>234</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>235</button>
                <br>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>236</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>237</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>238</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>239</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>240</button>
                <br>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>241</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>242</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>243</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>244</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>245</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>246</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>247</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>248</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>249</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>250</button>
            </div>

            <div class="mySlides">
                <button class="button button1" onclick="window.location.href='Levels/level1.php'" ;>251</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>252</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>253</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>254</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>255</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>256</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>257</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>258</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>259</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>260</button>
                <br>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>261</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>262</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>263</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>264</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>265</button>
                <br>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>266</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>267</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>268</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>269</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>270</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>271</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>272</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>273</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>274</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>275</button>
                <br>
                <button class="button button1" onclick="window.location.href='newkanjis.html'" ;>276</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>277</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>278</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>279</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>280</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>281</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>282</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>283</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>284</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>285</button>
                <br>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>286</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>287</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>288</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>289</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>290</button>
                <br>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>291</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>292</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>293</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>294</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>295</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>296</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>297</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>298</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>299</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>300</button>
            </div>

            <div class="mySlides">
                <button class="button button1" onclick="window.location.href='Levels/level1.php'" ;>301</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>302</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>303</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>304</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>305</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>306</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>307</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>308</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>309</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>310</button>
                <br>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>311</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>312</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>313</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>314</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>315</button>
                <br>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>316</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>317</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>318</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>319</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>320</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>321</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>322</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>323</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>324</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>325</button>
                <br>
                <button class="button button1" onclick="window.location.href='newkanjis.html'" ;>326</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>327</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>328</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>329</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>330</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>331</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>332</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>333</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>334</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>335</button>
                <br>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>336</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>337</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>338</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>339</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>340</button>
                <br>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>341</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>342</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>343</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>344</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>345</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>346</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>347</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>348</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>349</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>350</button>
            </div>

            <div class="mySlides">
                <button class="button button1" onclick="window.location.href='Levels/level1.php'" ;>351</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>352</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>353</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>354</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>355</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>356</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>357</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>358</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>359</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>360</button>
                <br>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>361</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>362</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>363</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>364</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>365</button>
                <br>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>366</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>367</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>368</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>369</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>370</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>371</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>372</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>373</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>374</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>375</button>
                <br>
                <button class="button button1" onclick="window.location.href='newkanjis.html'" ;>376</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>377</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>378</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>379</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>380</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>381</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>382</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>383</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>384</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>385</button>
                <br>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>386</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>387</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>388</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>389</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>390</button>
                <br>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>391</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>392</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>393</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>394</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>395</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>396</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>397</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>398</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>399</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>400</button>
            </div>

            <div class="mySlides">
                <button class="button button1" onclick="window.location.href='Levels/level1.php'" ;>401</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>402</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>403</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>404</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>405</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>406</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>407</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>408</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>409</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>410</button>
                <br>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>411</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>412</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>413</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>414</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>415</button>
                <br>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>416</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>417</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>418</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>419</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>420</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>421</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>422</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>423</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>424</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>425</button>
                <br>
                <button class="button button1" onclick="window.location.href='newkanjis.html'" ;>426</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>427</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>428</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>429</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>430</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>431</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>432</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>433</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>434</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>435</button>
                <br>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>436</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>437</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>438</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>439</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>440</button>
                <br>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>441</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>442</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>443</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>444</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>445</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>446</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>447</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>448</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>449</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>450</button>
            </div>

            <div class="mySlides">
                <button class="button button1" onclick="window.location.href='Levels/level1.php'" ;>451</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>452</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>453</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>454</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>455</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>456</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>457</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>458</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>459</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>460</button>
                <br>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>461</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>462</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>463</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>464</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>465</button>
                <br>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>466</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>467</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>468</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>469</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>470</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>471</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>472</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>473</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>474</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>475</button>
                <br>
                <button class="button button1" onclick="window.location.href='newkanjis.html'" ;>476</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>477</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>478</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>479</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>480</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>481</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>482</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>483</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>484</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>485</button>
                <br>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>486</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>487</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>488</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>489</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>490</button>
                <br>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>491</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>492</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>493</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>494</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>495</button>
                <br>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>496</button>
                <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>497</button>
                <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>498</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>499</button>
                <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>500</button>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <div class="dot-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
            <span class="dot" onclick="currentSlide(7)"></span>
            <span class="dot" onclick="currentSlide(8)"></span>
            <span class="dot" onclick="currentSlide(9)"></span>
            <span class="dot" onclick="currentSlide(10)"></span>
        </div>

        <?php
                if(isset($_GET["error"])) {
                    if ($_GET["error"] == "permissiondenied") {
                        echo "<p>Permission denied! Complete previous levels!</p>";
                    }
                    if ($_GET["error"] == "somethingwentwrong") {
                        echo "<p>Something went wrong! Try again!</p>";
                    }
                }
        ?>

        <script src="JavaScript/newkanjis.js"></script>
    </center>
    </body>
</html>