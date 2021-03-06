<?php
namespace Layered\QuickLogin\Provider;

use League\OAuth2\Client\Provider\GenericProvider;
use League\OAuth2\Client\Provider\ResourceOwnerInterface;
use Layered\QuickLogin\Provider;

class Custom extends Provider {

	public function __construct() {
		$this->oAuthVersion = 'oAuth2';
		$this->id = 'custom';
		$this->label = $this->getOption('label','Custom');
		$this->color = '#21759B';
		$this->icon = '  <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="700.000000pt" height="625.000000pt" viewBox="0 0 700.000000 625.000000" preserveAspectRatio="xMidYMid meet"> <metadata> Created by potrace 1.12, written by Peter Selinger 2001-2015 </metadata> <g transform="translate(0.000000,625.000000) scale(0.100000,-0.100000)" fill="#ffffff" stroke="none"> <path d="M2978 6245 c-3 -3 -48 -10 -99 -15 -52 -6 -119 -14 -149 -19 -30 -6 -89 -15 -130 -21 -124 -19 -348 -79 -485 -130 -159 -59 -247 -95 -317 -130 -20 -11 -45 -23 -55 -28 -61 -31 -94 -49 -143 -81 -42 -27 -51 -36 -36 -39 10 -2 152 1 315 7 l297 11 95 -24 c52 -13 127 -33 167 -46 41 -12 80 -19 87 -16 8 3 29 29 48 59 44 68 72 95 224 212 88 68 157 111 247 155 68 33 129 60 134 60 21 0 24 22 6 35 -19 14 -194 22 -206 10z"></path> <path d="M4736 5745 c-11 -17 -16 -48 -16 -108 0 -46 3 -87 7 -91 35 -35 52 -176 61 -510 7 -238 8 -249 28 -263 19 -12 77 -58 200 -158 137 -112 370 -346 453 -455 86 -114 161 -245 178 -310 8 -30 18 -59 23 -64 5 -5 26 -3 52 6 24 9 63 21 88 29 25 7 50 16 55 19 17 12 168 72 205 82 69 19 72 33 36 141 -13 40 -29 92 -37 117 -7 25 -19 54 -26 65 -7 11 -13 25 -13 32 0 7 -14 43 -31 80 -68 150 -81 179 -90 193 -4 8 -16 31 -26 50 -64 129 -242 391 -364 535 -130 153 -297 311 -456 431 -84 63 -294 204 -304 204 -4 0 -14 -11 -23 -25z"></path> <path d="M2550 5003 c-279 -288 -457 -471 -616 -633 -93 -96 -174 -181 -178 -187 -4 -7 -2 -23 5 -35 10 -19 196 -274 220 -302 14 -16 39 15 39 48 0 18 5 37 12 44 9 9 92 12 310 12 341 0 400 -6 583 -62 60 -19 149 -111 163 -170 42 -169 -39 -324 -203 -390 -22 -9 -60 -21 -85 -28 -25 -7 -51 -14 -59 -16 -11 -3 -11 -7 -1 -19 7 -8 17 -15 22 -15 17 0 78 -67 78 -85 0 -15 6 -17 48 -10 26 4 71 11 101 14 60 8 75 22 92 86 17 63 60 142 96 177 18 18 33 38 33 45 0 7 6 13 13 13 8 0 22 9 32 20 20 22 112 68 200 101 73 26 156 39 297 45 65 3 110 10 116 17 9 13 24 157 42 412 6 83 15 204 20 270 6 66 10 148 10 182 l0 63 -42 19 c-24 10 -83 36 -133 56 -49 21 -110 46 -135 57 -80 36 -102 45 -289 122 -100 42 -197 82 -215 90 -140 62 -431 176 -447 176 -8 0 -66 -53 -129 -117z"></path> <path d="M503 4768 c-15 -24 -33 -52 -39 -63 -6 -11 -27 -47 -46 -80 -29 -52 -98 -190 -143 -290 -8 -16 -30 -75 -50 -130 -20 -55 -40 -109 -45 -120 -23 -57 -59 -196 -79 -302 -5 -29 -13 -58 -17 -64 -6 -11 -15 -69 -35 -239 -18 -149 -22 -589 -7 -651 l14 -54 50 -3 c27 -2 104 -1 171 3 143 8 130 -9 143 185 7 110 26 223 61 370 7 25 34 101 61 170 51 130 56 141 82 202 9 20 61 107 116 192 55 86 100 164 100 173 0 9 -30 66 -66 125 -95 156 -115 267 -79 433 16 75 20 145 8 145 -5 0 -39 9 -78 20 -38 11 -76 20 -82 20 -7 0 -25 -19 -40 -42z"></path> <path d="M4680 3983 c0 -20 -29 -121 -41 -145 -5 -10 -9 -29 -9 -42 0 -14 -4 -35 -9 -48 -11 -31 -36 -118 -57 -198 -31 -123 -61 -235 -67 -250 -3 -8 -15 -53 -27 -100 -12 -47 -26 -101 -31 -120 -6 -19 -13 -46 -15 -60 -4 -22 -29 -104 -70 -235 -6 -22 -10 -43 -7 -47 5 -9 247 -11 291 -2 20 4 32 14 35 28 8 31 31 88 45 111 12 20 13 20 29 -5 29 -42 93 -98 136 -118 88 -41 323 -47 422 -11 219 80 334 245 352 505 11 157 -66 294 -197 351 -126 54 -261 57 -377 7 -17 -8 -35 -14 -40 -14 -5 0 -33 -16 -63 -35 -59 -38 -75 -35 -61 10 5 17 16 53 25 80 9 28 23 79 31 115 9 36 21 81 26 100 13 46 28 112 29 128 0 9 -41 12 -175 12 -156 0 -175 -2 -175 -17z m501 -587 c70 -30 102 -84 100 -176 -1 -82 -19 -127 -72 -185 -86 -94 -209 -123 -301 -71 -132 74 -111 287 39 394 70 50 168 66 234 38z"></path> <path d="M2000 3785 c0 -8 -4 -23 -9 -33 -22 -44 -40 -111 -57 -207 -3 -16 -9 -39 -14 -50 -10 -22 -28 -100 -37 -153 -3 -18 -9 -35 -14 -38 -5 -3 -9 -22 -9 -43 0 -20 -4 -41 -9 -47 -10 -10 -27 -80 -60 -236 -5 -24 -13 -56 -19 -73 -15 -45 -30 -106 -36 -142 l-5 -33 188 0 c185 0 188 0 199 23 14 26 32 96 39 150 3 20 9 40 14 43 5 3 9 20 9 38 0 19 7 47 15 62 8 16 15 39 15 51 0 12 5 34 12 48 11 24 15 25 88 25 49 0 88 -5 106 -15 31 -16 74 -93 74 -134 1 -14 7 -37 15 -51 8 -14 14 -39 15 -57 0 -17 5 -35 10 -38 6 -3 10 -24 10 -45 0 -21 5 -42 10 -45 6 -3 10 -17 10 -31 l0 -24 190 0 190 0 -6 48 c-4 26 -11 51 -15 57 -5 5 -9 21 -9 36 0 15 -4 31 -10 34 -5 3 -10 18 -10 33 0 15 -7 40 -15 56 -8 15 -15 38 -15 50 0 12 -4 26 -9 32 -5 5 -11 20 -13 34 -3 24 -6 25 -63 23 -33 -1 -99 -9 -147 -19 -48 -9 -94 -14 -103 -10 -8 3 -21 18 -27 33 -7 15 -18 34 -25 41 -7 8 -27 35 -45 60 -35 51 -35 52 -73 98 -14 18 -25 37 -25 43 0 21 40 31 124 31 97 0 161 21 214 73 29 28 32 36 32 92 0 54 -3 64 -27 86 -52 45 -67 49 -197 49 l-124 0 -5 -37 c-11 -76 -26 -142 -36 -162 -6 -11 -11 -29 -11 -40 0 -12 -6 -21 -14 -21 -13 0 -49 45 -167 210 -29 41 -56 77 -59 80 -3 3 -13 17 -23 33 -19 30 -37 36 -37 12z"></path> <path d="M3881 3611 c-5 -9 -12 -58 -16 -109 l-7 -93 29 -27 c31 -29 63 -101 63 -144 0 -44 -30 -150 -55 -193 -34 -58 -90 -98 -168 -119 -58 -16 -74 -17 -115 -6 -73 20 -120 55 -143 106 -21 51 -26 152 -8 186 15 29 6 33 -53 20 -71 -14 -222 -40 -280 -47 l-48 -6 0 -75 c0 -41 4 -82 9 -92 4 -9 18 -38 29 -64 31 -69 84 -122 160 -161 107 -54 155 -62 362 -62 216 0 272 9 400 68 50 22 149 98 171 130 13 17 26 34 29 37 5 5 17 30 40 85 34 80 48 209 30 269 -28 93 -92 181 -170 231 -43 27 -150 66 -208 75 -34 6 -45 4 -51 -9z"></path> <path d="M6310 3620 c-122 -11 -185 -27 -270 -69 -87 -42 -191 -140 -230 -217 -67 -133 -64 -324 7 -427 51 -73 102 -109 238 -167 40 -17 268 -24 380 -11 135 15 233 39 259 62 6 5 16 9 24 9 23 0 134 84 168 127 48 59 81 141 89 219 4 38 11 75 14 82 7 12 -16 118 -38 174 -13 34 -84 106 -136 139 -106 66 -304 98 -505 79z m232 -208 c18 -10 45 -36 60 -58 24 -35 27 -48 28 -121 0 -79 -3 -91 -44 -183 -19 -42 -102 -113 -148 -127 -24 -7 -70 -13 -104 -13 -72 0 -112 22 -158 88 -25 35 -31 55 -34 112 -4 64 -1 75 34 147 42 85 97 153 123 153 9 0 21 4 27 9 27 26 164 21 216 -7z"></path> <path d="M3670 3404 c-31 -11 -61 -33 -97 -72 -28 -31 -49 -60 -45 -64 4 -4 39 -1 77 6 39 8 104 19 145 26 88 15 100 22 100 64 0 27 -5 34 -33 44 -44 16 -92 14 -147 -4z"></path> <path d="M5500 2755 c-7 -8 -21 -15 -31 -15 -10 0 -21 -4 -24 -10 -3 -5 -12 -10 -20 -10 -8 0 -26 -11 -41 -25 -15 -14 -35 -25 -45 -25 -10 0 -20 -4 -23 -9 -9 -14 -76 -46 -126 -60 -25 -7 -58 -19 -75 -27 -16 -7 -52 -19 -80 -25 -27 -7 -75 -21 -105 -32 -30 -11 -80 -23 -110 -28 -86 -12 -152 -26 -183 -38 -16 -6 -39 -11 -52 -11 -44 0 -75 -21 -75 -51 0 -15 -4 -31 -10 -34 -5 -3 -10 -14 -10 -24 0 -10 -7 -32 -15 -47 -8 -16 -15 -39 -15 -52 0 -12 -4 -30 -9 -40 -10 -18 -51 -152 -51 -165 0 -4 88 -7 195 -7 186 0 195 -1 195 -19 0 -11 -4 -23 -10 -26 -5 -3 -10 -28 -10 -55 0 -27 -4 -52 -10 -55 -5 -3 -10 -19 -10 -34 0 -16 -7 -34 -15 -41 -10 -8 -15 -31 -15 -66 0 -29 -4 -56 -10 -59 -5 -3 -10 -21 -10 -39 0 -17 -5 -37 -11 -43 -6 -6 -11 -44 -11 -86 -1 -83 11 -107 55 -107 14 0 30 -7 37 -15 16 -19 41 -19 66 0 10 8 29 15 42 15 31 0 59 17 120 75 38 36 52 57 52 77 0 15 5 30 10 33 6 3 10 21 10 39 0 18 7 41 15 52 8 10 15 36 15 56 0 20 5 40 10 43 6 3 10 19 10 35 0 16 5 32 10 35 6 3 10 28 10 54 0 31 5 53 15 61 8 7 15 25 15 41 l0 29 200 0 c127 0 200 -4 200 -10 0 -5 -4 -10 -10 -10 -5 0 -10 -12 -10 -27 0 -16 -7 -41 -15 -57 -8 -15 -15 -46 -15 -67 0 -22 -4 -39 -10 -39 -5 0 -10 -18 -10 -39 0 -22 -4 -42 -9 -45 -4 -3 -11 -28 -15 -55 -4 -28 -11 -53 -16 -56 -6 -3 -10 -21 -10 -40 0 -19 -4 -37 -10 -40 -5 -3 -10 -26 -10 -49 0 -27 -6 -48 -15 -56 -9 -7 -15 -29 -15 -51 0 -21 -4 -41 -10 -44 -5 -3 -10 -28 -10 -54 0 -26 -4 -51 -9 -56 -5 -6 -11 -28 -13 -50 l-3 -40 -181 -3 -181 -2 5 52 c3 29 9 55 13 56 5 2 9 11 9 20 0 11 -11 4 -32 -19 -37 -40 -110 -89 -133 -89 -8 0 -15 -4 -15 -10 0 -5 -17 -10 -38 -10 -21 0 -47 -7 -58 -15 -28 -21 -216 -21 -234 0 -7 8 -22 15 -35 15 -56 0 -159 92 -189 168 -21 56 -22 220 -1 248 8 10 15 36 15 56 0 20 5 40 10 43 6 3 10 24 10 45 0 21 5 42 10 45 6 3 10 28 10 56 0 27 -4 49 -10 49 -5 0 -10 -10 -10 -23 0 -13 -4 -27 -8 -32 -5 -6 -15 -30 -22 -55 -8 -25 -25 -70 -38 -100 -13 -30 -30 -70 -38 -88 -8 -18 -14 -39 -14 -47 0 -8 -4 -15 -9 -15 -4 0 -16 -25 -26 -55 -9 -30 -21 -57 -26 -61 -5 -3 -9 -15 -9 -27 0 -16 -3 -18 -12 -9 -10 10 -10 17 0 32 17 28 -2 35 -51 17 -88 -31 -152 -39 -292 -35 -143 5 -182 11 -247 42 -47 22 -117 94 -135 138 -20 47 -18 253 3 303 21 51 79 137 105 155 11 8 33 25 47 38 37 32 104 62 187 83 127 34 378 22 470 -21 11 -6 31 -11 45 -12 21 -3 27 3 41 42 9 25 19 54 23 65 5 11 14 37 22 57 l14 38 -36 15 c-20 8 -48 15 -63 15 -14 0 -42 4 -61 9 -19 6 -73 12 -120 15 -47 4 -114 8 -150 11 -133 11 -407 -34 -509 -83 -25 -12 -48 -22 -52 -22 -20 0 -166 -110 -208 -156 -43 -47 -89 -128 -130 -228 -15 -35 -16 -316 -2 -343 5 -10 22 -44 38 -76 26 -53 115 -151 168 -185 22 -13 79 -41 110 -52 11 -4 38 -14 60 -23 106 -40 292 -55 455 -37 58 6 130 14 160 16 77 7 87 12 66 27 -13 10 -15 20 -8 52 12 62 37 53 37 -13 0 -51 2 -55 40 -85 22 -17 57 -45 77 -62 20 -16 49 -39 64 -50 15 -11 39 -31 53 -45 24 -23 75 -55 126 -78 12 -6 27 -17 34 -26 7 -9 22 -16 32 -16 10 0 20 -4 23 -9 10 -16 109 -61 132 -61 13 0 25 -4 29 -9 9 -15 66 -41 90 -41 13 0 28 -7 35 -15 14 -17 56 -20 65 -6 7 12 64 41 80 41 6 0 22 11 35 25 13 14 29 25 35 25 7 0 20 9 30 20 11 12 34 28 52 37 18 8 33 19 33 24 0 5 6 9 14 9 7 0 41 27 74 60 34 33 68 60 75 60 7 0 20 15 28 33 9 20 22 33 36 35 12 2 40 23 61 48 22 24 45 44 51 44 6 0 11 7 11 15 0 8 5 15 10 15 6 0 10 -4 10 -9 0 -6 -4 -13 -10 -16 -5 -3 -10 -21 -10 -40 0 -32 -11 -79 -46 -200 -8 -27 -17 -65 -20 -83 -4 -18 -11 -35 -15 -38 -5 -3 -9 -12 -9 -20 0 -12 29 -14 174 -14 126 0 177 3 182 12 4 7 11 30 15 53 4 22 14 65 24 95 15 50 25 93 42 173 3 15 9 30 14 33 5 3 9 15 9 27 0 27 17 87 30 107 7 12 15 7 44 -26 107 -126 281 -162 503 -105 157 40 305 201 334 365 6 33 15 85 21 114 8 38 8 59 0 77 -7 14 -12 40 -12 56 0 45 -45 131 -90 172 -21 21 -41 37 -44 37 -3 0 -29 11 -58 24 -67 30 -178 48 -221 35 -17 -5 -44 -9 -59 -9 -47 0 -196 -71 -235 -112 -15 -16 -35 -28 -46 -28 -18 0 -19 4 -12 43 18 96 21 91 -80 97 l-90 5 -3 40 c-2 22 -8 44 -13 49 -5 6 -9 29 -9 52 0 24 -4 46 -10 49 -5 3 -10 24 -10 46 0 21 -4 39 -10 39 -5 0 -12 12 -16 28 -10 44 -108 239 -128 253 -5 4 -16 22 -25 40 -9 19 -33 60 -54 92 -40 60 -71 74 -97 42z m372 -799 c3 -35 9 -70 14 -77 13 -21 10 -170 -3 -188 -7 -9 -13 -25 -13 -35 0 -11 -11 -34 -25 -51 -13 -18 -22 -35 -20 -37 3 -2 -13 -22 -35 -43 -22 -22 -40 -44 -40 -50 0 -6 -16 -26 -35 -45 -19 -19 -35 -39 -35 -45 0 -6 -29 -40 -65 -75 -36 -35 -65 -59 -65 -53 0 7 7 38 16 70 8 32 22 85 30 118 8 33 19 74 25 92 5 17 21 76 35 130 24 94 45 174 65 239 5 17 9 46 9 66 0 19 3 38 7 41 3 4 34 7 68 7 l62 0 5 -64z m516 -163 c51 -29 72 -82 72 -178 0 -46 -4 -87 -10 -90 -5 -3 -10 -15 -10 -26 0 -27 -112 -139 -139 -139 -11 0 -23 -4 -26 -10 -3 -5 -45 -10 -92 -10 -77 0 -90 3 -120 26 -58 44 -73 79 -73 166 0 42 5 80 10 83 6 3 10 13 10 20 0 50 124 161 198 176 54 11 145 2 180 -18z"></path> <path d="M2020 1991 c-60 -33 -134 -64 -170 -72 -87 -20 -117 -28 -145 -37 -63 -22 -458 -38 -714 -29 -45 2 -45 2 -54 -38 -14 -61 -14 -358 1 -465 23 -174 28 -204 51 -280 35 -111 97 -255 129 -295 40 -50 276 -224 372 -273 25 -13 64 -34 88 -47 23 -13 59 -29 80 -36 38 -12 113 -43 144 -60 10 -5 25 -9 34 -9 18 0 108 -28 136 -41 10 -5 27 -9 38 -9 11 0 28 -5 38 -10 20 -12 315 -73 353 -73 15 0 39 12 55 27 22 20 25 26 12 26 -9 0 -20 -4 -23 -10 -8 -13 -38 -13 -67 0 -30 14 -50 56 -37 78 12 23 49 112 49 121 0 3 -20 13 -45 20 -58 17 -95 46 -95 75 0 27 13 43 63 80 20 15 37 32 37 38 0 5 -13 27 -29 47 -29 37 -47 106 -30 116 5 4 27 6 48 7 32 0 45 -6 80 -41 22 -22 47 -41 55 -41 24 0 36 25 29 63 -14 90 41 147 95 97 12 -11 27 -20 33 -20 7 0 20 -7 30 -16 14 -13 21 -13 40 -4 20 11 21 17 16 91 -6 93 2 104 63 94 22 -4 42 -11 46 -16 3 -5 19 -9 35 -9 22 0 32 -6 39 -24 13 -34 27 -40 34 -13 12 45 5 56 -63 104 -115 81 -275 229 -434 401 -32 34 -62 62 -65 62 -4 0 -7 -14 -7 -32 0 -28 -4 -33 -35 -41 -19 -5 -36 -10 -38 -12 -6 -5 39 -87 59 -108 10 -12 19 -24 19 -28 0 -4 7 -15 16 -24 10 -10 13 -22 8 -33 -4 -9 -8 -24 -8 -32 -1 -16 -42 -18 -128 -5 -35 6 -48 4 -48 -4 0 -8 8 -10 19 -6 25 8 33 -7 22 -39 -8 -20 -7 -24 4 -20 8 3 16 -3 20 -15 3 -12 11 -21 16 -21 6 0 7 -15 3 -36 -5 -25 -3 -35 4 -30 24 14 23 -18 -1 -42 l-26 -26 -49 27 c-68 37 -90 36 -84 -3 2 -17 12 -35 21 -40 13 -7 17 -22 16 -72 -1 -84 -20 -87 -95 -18 -60 55 -86 64 -76 28 3 -13 9 -58 13 -100 5 -66 4 -78 -9 -78 -15 0 -74 59 -114 115 -31 44 -44 26 -44 -61 0 -60 -3 -76 -17 -81 -18 -7 -59 37 -69 75 -4 12 -10 22 -15 22 -5 0 -9 6 -9 13 -1 6 -10 23 -20 36 -27 32 -46 15 -55 -49 -4 -28 -11 -52 -15 -55 -26 -16 -58 30 -89 126 -7 20 -20 44 -30 53 -16 15 -19 15 -33 -1 -9 -10 -23 -33 -33 -52 l-17 -33 -27 26 c-20 19 -30 43 -40 98 -7 40 -16 78 -18 85 -8 21 -30 15 -68 -19 l-36 -31 -21 21 c-17 16 -22 39 -29 112 -4 51 -11 96 -16 101 -4 4 -30 1 -56 -8 -72 -24 -81 -11 -78 110 l2 94 -35 17 -35 16 2 95 c3 130 14 136 69 38 24 -43 50 -93 57 -110 7 -18 17 -33 22 -33 4 0 10 -8 13 -17 3 -10 17 -31 31 -47 14 -16 25 -32 25 -36 0 -10 122 -130 132 -130 10 0 -18 34 -54 68 -10 9 -18 22 -18 28 0 6 -7 18 -16 25 -17 14 -46 54 -98 138 -58 93 -78 137 -83 190 l-6 53 97 -7 c171 -13 166 -14 159 30 -6 38 -3 41 26 24 14 -9 25 -9 47 2 16 8 47 14 69 13 22 0 59 7 83 17 56 24 77 24 95 -1 14 -20 15 -20 19 -2 3 12 18 21 38 25 26 6 36 3 51 -16 10 -12 18 -29 18 -37 0 -41 -29 -141 -48 -165 -28 -37 -92 -84 -113 -85 -30 0 -30 -20 -1 -26 29 -6 29 -6 31 -91 3 -90 24 -148 81 -221 28 -36 97 -77 105 -63 3 4 -10 26 -29 49 -53 61 -46 85 10 34 115 -103 184 -73 172 75 -7 94 -60 193 -133 252 -51 41 -55 47 -49 75 4 17 10 72 13 121 4 50 10 95 14 102 5 6 23 11 40 11 18 0 55 12 82 27 27 14 68 28 91 30 37 4 44 1 55 -20 7 -14 19 -25 27 -25 15 0 17 16 3 25 -5 3 -10 13 -10 21 0 8 -5 20 -10 27 -6 7 -18 22 -28 34 -17 23 -17 23 -52 4z m479 -700 c11 -7 9 -14 -13 -36 -43 -43 -87 -21 -46 23 22 24 37 27 59 13z m115 -188 c-25 -19 -28 -10 -14 49 18 76 25 80 28 18 3 -43 -1 -57 -14 -67z m-69 57 c3 -5 1 -10 -4 -10 -6 0 -11 5 -11 10 0 6 2 10 4 10 3 0 8 -4 11 -10z"></path> <path d="M4370 1965 c0 -8 5 -15 10 -15 6 0 10 7 10 15 0 8 -4 15 -10 15 -5 0 -10 -7 -10 -15z"></path> <path d="M4350 1886 c0 -14 5 -26 10 -26 6 0 10 9 10 19 0 11 -4 23 -10 26 -6 4 -10 -5 -10 -19z"></path> <path d="M2255 1700 c3 -5 8 -10 11 -10 2 0 4 5 4 10 0 6 -5 10 -11 10 -5 0 -7 -4 -4 -10z"></path> <path d="M2281 1675 c0 -14 28 -50 34 -43 3 3 -3 16 -14 29 -11 13 -20 20 -20 14z"></path> <path d="M1430 1172 c0 -10 38 -42 50 -42 6 0 10 5 10 10 0 6 -6 10 -14 10 -8 0 -16 7 -20 15 -6 15 -26 21 -26 7z"></path> <path d="M1926 1126 c3 -9 11 -16 16 -16 13 0 5 23 -10 28 -7 2 -10 -2 -6 -12z"></path> <path d="M2716 815 c-4 -11 -20 -15 -55 -15 -35 0 -51 -4 -55 -16 -3 -8 -10 -13 -15 -9 -27 16 -54 -117 -36 -175 11 -39 38 -94 52 -108 7 -7 17 -21 22 -30 9 -15 13 -14 36 13 28 33 108 161 141 228 26 50 20 65 -34 102 -43 29 -48 30 -56 10z"></path> </g> </svg>';
		$this->scope = $this->getOption('scope','openid');

		$this->userSettings = array(
			'label'	=>	array(
				'name'		=>	__('Label', 'quick-login'),
				'required'	=>	true,
				'type'		=>	'text',
				'default'	=>	'Custom'
			),
			
			'clientId'		=>	array(
				'name'		=>	__('Client ID', 'quick-login'),
				'required'	=>	true,
				'type'		=>	'text',
				'default'	=>	''
			),
			'clientSecret'	=>	array(
				'name'		=>	__('Client Secret', 'quick-login'),
				'required'	=>	true,
				'type'		=>	'text',
				'default'	=>	''
			),
			'urlAuthorize'	=>	array(
				'name'		=>	__('Authorize URL', 'quick-login'),
				'required'	=>	true,
				'type'		=>	'text',
				'default'	=>	''
			),
			'urlAccessToken'	=>	array(
				'name'		=>	__('Access Token URL', 'quick-login'),
				'required'	=>	true,
				'type'		=>	'text',
				'default'	=>	''
			),
			'urlResourceOwnerDetails'	=>	array(
				'name'		=>	__('Resource Owner Details URL', 'quick-login'),
				'required'	=>	true,
				'type'		=>	'text',
				'default'	=>	''
			),
			'responseResourceOwnerId'	=>	array(
				'name'		=>	__('Response Resource Owner Id', 'quick-login'),
				'required'	=>	true,
				'type'		=>	'text',
				'default'	=>	'user.id'
			),
			'scope'	=>	array(
				'name'		=>	__('scope', 'quick-login'),
				'required'	=>	true,
				'type'		=>	'text',
				'default'	=>	''
			)

		);
	}

	public function instructions() {
		?>
		<p><strong>OAuth Login</strong> requires credentials for a OAuth server app. <button class="button button-small quick-login-provider-instructions-btn">Show instructions ↕</button></p>
		<ol class="quick-login-provider-instructions">
			<li>Create (or edit) a client on your SSO provider server
				<ul>
					<li>If creating, click on <strong>Create New Client</strong> button</li>
					<li>If editing, click <strong>Manage Application -> Manage Settings</strong> on a specific app</li>
					<li>Fill <strong>Name</strong>, <strong>Description</strong>, <strong>Icon</strong> and <strong>Website URL</strong> with site specific info</li>
					<li>Fill <strong>Redirect URLs</strong> with <code><?php echo site_url('/wp-login.php?quick-login=custom') ?></code></li>
					<li>Update or Save app</li>
				</ul>
			</li>
			<li>On app page, scroll down to <strong>OAuth Information</strong> section
				<ul>
					<li>Copy and fill below the <strong>Client ID</strong> field</li>
					<li>Copy and fill below the <strong>Client secret</strong> field</li>
				</ul>
			</li>
		</ol>
		<?php
	}

	protected function getClient() {
		return new GenericProvider([
			'clientId'					=>	$this->getOption('clientId'),
			'clientSecret'				=>	$this->getOption('clientSecret'),
			'redirectUri'				=>	site_url('/wp-login.php?quick-login=custom'),
			'urlAuthorize'				=>	$this->getOption('urlAuthorize'),
			'urlAccessToken'			=>	$this->getOption('urlAccessToken'),
			'urlResourceOwnerDetails'	=>	$this->getOption('urlResourceOwnerDetails'),
			'responseResourceOwnerId'	=>	$this->getOption('responseResourceOwnerId')
		]);
	}

	public function convertFields(ResourceOwnerInterface $user) {
		$userData = $user->toArray();
		
		return [
			'id'			=>	$userData['id'],
			'user_login'	=>	'',
			'user_email'	=>	$userData['email'],
			'display_name'	=>	$userData['name'],
			'first_name'	=>	$userData['given_name'],
			'last_name'		=>	$userData['family_name'],
			'description'	=>	'',
			'user_url'		=>	'',
			'locale'		=>	'',
			'avatar'		=>	''
		];
	}

}
