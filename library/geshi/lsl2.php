<?php
/*************************************************************************************
 * lsl2.php
 * --------
 * Author: William Fry (william.fry@nyu.edu)
 * Copyright: (c) 2009 William Fry
 * Release Version: 1.0.8.10
 * Date Started: 2009/02/04
 *
 * Linden Scripting Language (LSL2) language file for GeSHi.
 *
 *   Data derived and validated against the following:
 *      http://wiki.secondlife.com/wiki/LSL_Portal
 *      http://www.lslwiki.net/lslwiki/wakka.php?wakka=HomePage
 *      http://rpgstats.com/wiki/index.php?title=Main_Page
 *
 * CHANGES
 * -------
 * 2009/02/05 (1.0.0)
 *   -  First Release
 *
 * TODO (updated 2009/02/05)
 * -------------------------
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'LSL2',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array( // flow control
            'do',
            'else',
            'for',
            'if',
            'jump',
            'return',
            'state',
            'while',
            ),
        2 => array( // manifest constants
            'ACTIVE',
            'AGENT',
            'AGENT_ALWAYS_RUN',
            'AGENT_ATTACHMENTS',
            'AGENT_AWAY',
            'AGENT_BUSY',
            'AGENT_CROUCHING',
            'AGENT_FLYING',
            'AGENT_IN_AIR',
            'AGENT_MOUSELOOK',
            'AGENT_ON_OBJECT',
            'AGENT_SCRIPTED',
            'AGENT_SITTING',
            'AGENT_TYPING',
            'AGENT_WALKING',
            'ALL_SIDES',
            'ANIM_ON',
            'ATTACH_BACK',
            'ATTACH_BELLY',
            'ATTACH_CHEST',
            'ATTACH_CHIN',
            'ATTACH_HEAD',
            'ATTACH_HUD_BOTTOM',
            'ATTACH_HUD_BOTTOM_LEFT',
            'ATTACH_HUD_BOTTOM_RIGHT',
            'ATTACH_HUD_CENTER_1',
            'ATTACH_HUD_CENTER_2',
            'ATTACH_HUD_TOP_CENTER',
            'ATTACH_HUD_TOP_LEFT',
            'ATTACH_HUD_TOP_RIGHT',
            'ATTACH_LEAR',
            'ATTACH_LEYE',
            'ATTACH_LFOOT',
            'ATTACH_LHAND',
            'ATTACH_LHIP',
            'ATTACH_LLARM',
            'ATTACH_LLLEG',
            'ATTACH_LPEC',
            'ATTACH_LSHOULDER',
            'ATTACH_LUARM',
            'ATTACH_LULEG',
            'ATTACH_MOUTH',
            'ATTACH_NOSE',
            'ATTACH_PELVIS',
            'ATTACH_REAR',
            'ATTACH_REYE',
            'ATTACH_RFOOT',
            'ATTACH_RHAND',
            'ATTACH_RHIP',
            'ATTACH_RLARM',
            'ATTACH_RLLEG',
            'ATTACH_RPEC',
            'ATTACH_RSHOULDER',
            'ATTACH_RUARM',
            'ATTACH_RULEG',
            'CAMERA_ACTIVE',
            'CAMERA_BEHINDNESS_ANGLE',
            'CAMERA_BEHINDNESS_LAG',
            'CAMERA_DISTANCE',
            'CAMERA_FOCUS',
            'CAMERA_FOCUS_LAG',
            'CAMERA_FOCUS_LOCKED',
            'CAMERA_FOCUS_OFFSET',
            'CAMERA_FOCUS_THRESHOLD',
            'CAMERA_PITCH',
            'CAMERA_POSITION',
            'CAMERA_POSITION_LAG',
            'CAMERA_POSITION_LOCKED',
            'CAMERA_POSITION_THRESHOLD',
            'CHANGED_ALLOWED_DROP',
            'CHANGED_COLOR',
            'CHANGED_INVENTORY',
            'CHANGED_LINK',
            'CHANGED_OWNER',
            'CHANGED_REGION',
            'CHANGED_SCALE',
            'CHANGED_SHAPE',
            'CHANGED_TELEPORT',
            'CHANGED_TEXTURE',
            'CLICK_ACTION_NONE',
            'CLICK_ACTION_OPEN',
            'CLICK_ACTION_OPEN_MEDIA',
            'CLICK_ACTION_PAY',
            'CLICK_ACTION_SIT',
            'CLICK_ACTION_TOUCH',
            'CONTROL_BACK',
            'CONTROL_DOWN',
            'CONTROL_FWD',
            'CONTROL_LBUTTON',
            'CONTROL_LEFT',
            'CONTROL_ML_LBUTTON',
            'CONTROL_RIGHT',
            'CONTROL_ROT_LEFT',
            'CONTROL_ROT_RIGHT',
            'CONTROL_UP',
            'DATA_BORN',
            'DATA_NAME',
            'DATA_ONLINE',
            'DATA_PAYINFO',
            'DATA_RATING',
            'DATA_SIM_POS',
            'DATA_SIM_RATING',
            'DATA_SIM_STATUS',
            'DEBUG_CHANNEL',
            'DEG_TO_RAD',
            'EOF',
            'FALSE',
            'HTTP_BODY_MAXLENGTH',
            'HTTP_BODY_TRUNCATED',
            'HTTP_METHOD',
            'HTTP_MIMETYPE',
            'HTTP_VERIFY_CERT',
            'INVENTORY_ALL',
            'INVENTORY_ANIMATION',
            'INVENTORY_BODYPART',
            'INVENTORY_CLOTHING',
            'INVENTORY_GESTURE',
            'INVENTORY_LANDMARK',
            'INVENTORY_NONE',
            'INVENTORY_NOTECARD',
            'INVENTORY_OBJECT',
            'INVENTORY_SCRIPT',
            'INVENTORY_SOUND',
            'INVENTORY_TEXTURE',
            'LAND_LEVEL',
            'LAND_LOWER',
            'LAND_NOISE',
            'LAND_RAISE',
            'LAND_REVERT',
            'LAND_SMOOTH',
            'LINK_ALL_CHILDREN',
            'LINK_ALL_OTHERS',
            'LINK_ROOT',
            'LINK_SET',
            'LINK_THIS',
            'LIST_STAT_GEOMETRIC_MEAN',
            'LIST_STAT_MAX',
            'LIST_STAT_MEAN',
            'LIST_STAT_MEDIAN',
            'LIST_STAT_MIN',
            'LIST_STAT_NUM_COUNT',
            'LIST_STAT_RANGE',
            'LIST_STAT_STD_DEV',
            'LIST_STAT_SUM',
            'LIST_STAT_SUM_SQUARES',
            'LOOP',
            'MASK_BASE',
            'MASK_EVERYONE',
            'MASK_GROUP',
            'MASK_NEXT',
            'MASK_OWNER',
            'NULL_KEY',
            'OBJECT_CREATOR',
            'OBJECT_DESC',
            'OBJECT_GROUP',
            'OBJECT_NAME',
            'OBJECT_OWNER',
            'OBJECT_POS',
            'OBJECT_ROT',
            'OBJECT_UNKNOWN_DETAIL',
            'OBJECT_VELOCITY',
            'PARCEL_DETAILS_AREA',
            'PARCEL_DETAILS_DESC',
            'PARCEL_DETAILS_GROUP',
            'PARCEL_DETAILS_NAME',
            'PARCEL_DETAILS_OWNER',
            'PARCEL_FLAG_ALLOW_ALL_OBJECT_ENTRY',
            'PARCEL_FLAG_ALLOW_CREATE_GROUP_OBJECTS',
            'PARCEL_FLAG_ALLOW_CREATE_OBJECTS',
            'PARCEL_FLAG_ALLOW_DAMAGE',
            'PARCEL_FLAG_ALLOW_FLY',
            'PARCEL_FLAG_ALLOW_GROUP_OBJECT_ENTRY',
            'PARCEL_FLAG_ALLOW_GROUP_SCRIPTS',
            'PARCEL_FLAG_ALLOW_LANDMARK',
            'PARCEL_FLAG_ALLOW_SCRIPTS',
            'PARCEL_FLAG_ALLOW_TERRAFORM',
            'PARCEL_FLAG_LOCAL_SOUND_ONLY',
            'PARCEL_FLAG_RESTRICT_PUSHOBJECT',
            'PARCEL_FLAG_USE_ACCESS_GROUP',
            'PARCEL_FLAG_USE_ACCESS_LIST',
            'PARCEL_FLAG_USE_BAN_LIST',
            'PARCEL_FLAG_USE_LAND_PASS_LIST',
            'PARCEL_MEDIA_COMMAND_AGENT',
            'PARCEL_MEDIA_COMMAND_AUTO_ALIGN',
            'PARCEL_MEDIA_COMMAND_DESC',
            'PARCEL_MEDIA_COMMAND_LOOP_SET',
            'PARCEL_MEDIA_COMMAND_PAUSE',
            'PARCEL_MEDIA_COMMAND_PLAY',
            'PARCEL_MEDIA_COMMAND_SIZE',
            'PARCEL_MEDIA_COMMAND_STOP',
            'PARCEL_MEDIA_COMMAND_TEXTURE',
            'PARCEL_MEDIA_COMMAND_TIME',
            'PARCEL_MEDIA_COMMAND_TYPE',
            'PARCEL_MEDIA_COMMAND_URL',
            'PASSIVE',
            'PAYMENT_INFO_ON_FILE',
            'PAYMENT_INFO_USED',
            'PAY_DEFAULT',
            'PAY_HIDE',
            'PERMISSION_ATTACH',
            'PERMISSION_CHANGE_LINKS',
            'PERMISSION_CONTROL_CAMERA',
            'PERMISSION_DEBIT',
            'PERMISSION_TAKE_CONTROLS',
            'PERMISSION_TRACK_CAMERA',
            'PERMISSION_TRIGGER_ANIMATION',
            'PERM_ALL',
            'PERM_COPY',
            'PERM_MODIFY',
            'PERM_MOVE',
            'PERM_TRANSFER',
            'PI',
            'PI_BY_TWO',
            'PRIM_BUMP_BARK',
            'PRIM_BUMP_BLOBS',
            'PRIM_BUMP_BRICKS',
            'PRIM_BUMP_BRIGHT',
            'PRIM_BUMP_CHECKER',
            'PRIM_BUMP_CONCRETE',
            'PRIM_BUMP_DARK',
            'PRIM_BUMP_DISKS',
            'PRIM_BUMP_GRAVEL',
            'PRIM_BUMP_LARGETILE',
            'PRIM_BUMP_NONE',
            'PRIM_BUMP_SHINY',
            'PRIM_BUMP_SIDING',
            'PRIM_BUMP_STONE',
            'PRIM_BUMP_STUCCO',
            'PRIM_BUMP_SUCTION',
            'PRIM_BUMP_TILE',
            'PRIM_BUMP_WEAVE',
            'PRIM_BUMP_WOOD',
            'PRIM_COLOR',
            'PRIM_FULLBRIGHT',
            'PRIM_HOLE_CIRCLE',
            'PRIM_HOLE_DEFAULT',
            'PRIM_HOLE_SQUARE',
            'PRIM_HOLE_TRIANGLE',
            'PRIM_MATERIAL',
            'PRIM_MATERIAL_FLESH',
            'PRIM_MATERIAL_GLASS',
            'PRIM_MATERIAL_LIGHT',
            'PRIM_MATERIAL_METAL',
            'PRIM_MATERIAL_PLASTIC',
            'PRIM_MATERIAL_RUBBER',
            'PRIM_MATERIAL_STONE',
            'PRIM_MATERIAL_WOOD',
            'PRIM_PHANTOM',
            'PRIM_PHYSICS',
            'PRIM_POSITION',
            'PRIM_ROTATION',
            'PRIM_SHINY_HIGH',
            'PRIM_SHINY_LOW',
            'PRIM_SHINY_MEDIUM',
            'PRIM_SHINY_NONE',
            'PRIM_SIZE',
            'PRIM_TEMP_ON_REZ',
            'PRIM_TEXTURE',
            'PRIM_TYPE',
            'PRIM_TYPE_BOX',
            'PRIM_TYPE_CYLINDER',
            'PRIM_TYPE_PRISM',
            'PRIM_TYPE_RING',
            'PRIM_TYPE_SPHERE',
            'PRIM_TYPE_TORUS',
            'PRIM_TYPE_TUBE',
            'PSYS_PART_BOUNCE_MASK',
            'PSYS_PART_EMISSIVE_MASK',
            'PSYS_PART_END_ALPHA',
            'PSYS_PART_END_COLOR',
            'PSYS_PART_END_SCALE',
            'PSYS_PART_FLAGS',
            'PSYS_PART_FOLLOW_SRC_MASK',
            'PSYS_PART_FOLLOW_VELOCITY_MASK',
            'PSYS_PART_INTERP_COLOR_MASK',
            'PSYS_PART_INTERP_SCALE_MASK',
            'PSYS_PART_MAX_AGE',
            'PSYS_PART_START_ALPHA',
            'PSYS_PART_START_COLOR',
            'PSYS_PART_START_SCALE',
            'PSYS_PART_TARGET_LINEAR_MASK',
            'PSYS_PART_TARGET_POS_MASK',
            'PSYS_PART_WIND_MASK',
            'PSYS_SRC_ACCEL',
            'PSYS_SRC_ANGLE_BEGIN',
            'PSYS_SRC_ANGLE_END',
            'PSYS_SRC_BURST_PART_COUNT',
            'PSYS_SRC_BURST_RADIUS',
            'PSYS_SRC_BURST_RATE',
            'PSYS_SRC_BURST_SPEED_MAX',
            'PSYS_SRC_BURST_SPEED_MIN',
            'PSYS_SRC_INNERANGLE',
            'PSYS_SRC_MAX_AGE',
            'PSYS_SRC_OMEGA',
            'PSYS_SRC_OUTERANGLE',
            'PSYS_SRC_PATTERN',
            'PSYS_SRC_PATTERN_ANGLE',
            'PSYS_SRC_PATTERN_ANGLE_CONE',
            'PSYS_SRC_PATTERN_ANGLE_CONE_EMPTY',
            'PSYS_SRC_PATTERN_DROP',
            'PSYS_SRC_PATTERN_EXPLODE',
            'PSYS_SRC_TARGET_KEY',
            'PSYS_SRC_TEXTURE',
            'RAD_TO_DEG',
            'REMOTE_DATA_CHANNEL',
            'REMOTE_DATA_REQUEST',
            'SCRIPTED',
            'SQRT2',
            'STATUS_BLOCK_GRAB',
            'STATUS_DIE_AT_EDGE',
            'STATUS_PHANTOM',
            'STATUS_PHYSICS',
            'STATUS_RETURN_AT_EDGE',
            'STATUS_ROTATE_X',
            'STATUS_ROTATE_Y',
            'STATUS_ROTATE_Z',
            'STATUS_SANDBOX',
            'TRUE',
            'TWO_PI',
            'VEHICLE_ANGULAR_DEFLECTION_EFFICIENCY',
            'VEHICLE_ANGULAR_DEFLECTION_TIMESCALE',
            'VEHICLE_ANGULAR_FRICTION_TIMESCALE',
            'VEHICLE_ANGULAR_MOTOR_DECAY_TIMESCALE',
            'VEHICLE_ANGULAR_MOTOR_DIRECTION',
            'VEHICLE_ANGULAR_MOTOR_TIMESCALE',
            'VEHICLE_BANKING_EFFICIENCY',
            'VEHICLE_BANKING_MIX',
            'VEHICLE_BANKING_TIMESCALE',
            'VEHICLE_BUOYANCY',
            'VEHICLE_FLAG_CAMERA_DECOUPLED',
            'VEHICLE_FLAG_HOVER_GLOBAL_HEIGHT',
            'VEHICLE_FLAG_HOVER_TERRAIN_ONLY',
            'VEHICLE_FLAG_HOVER_UP_ONLY',
            'VEHICLE_FLAG_HOVER_WATER_ONLY',
            'VEHICLE_FLAG_LIMIT_MOTOR_UP',
            'VEHICLE_FLAG_LIMIT_ROLL_ONLY',
            'VEHICLE_FLAG_MOUSELOOK_BANK',
            'VEHICLE_FLAG_MOUSELOOK_STEER',
            'VEHICLE_FLAG_NO_DEFLECTION_UP',
            'VEHICLE_HOVER_EFFICIENCY',
            'VEHICLE_HOVER_HEIGHT',
            'VEHICLE_HOVER_TIMESCALE',
            'VEHICLE_LINEAR_DEFLECTION_EFFICIENCY',
            'VEHICLE_LINEAR_DEFLECTION_TIMESCALE',
            'VEHICLE_LINEAR_FRICTION_TIMESCALE',
            'VEHICLE_LINEAR_MOTOR_DECAY_TIMESCALE',
            'VEHICLE_LINEAR_MOTOR_DIRECTION',
            'VEHICLE_LINEAR_MOTOR_OFFSET',
            'VEHICLE_LINEAR_MOTOR_TIMESCALE',
            'VEHICLE_REFERENCE_FRAME',
            'VEHICLE_TYPE_AIRPLANE',
            'VEHICLE_TYPE_BALLOON',
            'VEHICLE_TYPE_BOAT',
            'VEHICLE_TYPE_CAR',
            'VEHICLE_TYPE_NONE',
            'VEHICLE_TYPE_SLED',
            'VEHICLE_VERTICAL_ATTRACTION_EFFICIENCY',
            'VEHICLE_VERTICAL_ATTRACTION_TIMESCALE',
            'ZERO_ROTATION',
            'ZERO_VECTOR',
            ),
        3 => array( // handlers
            'at_rot_target',
            'at_target',
            'attached',
            'changed',
            'collision',
            'collision_end',
            'collision_start',
            'control',
            'dataserver',
            'email',
            'http_response',
            'land_collision',
            'land_collision_end',
            'land_collision_start',
            'link_message',
            'listen',
            'money',
            'moving_end',
            'moving_start',
            'no_sensor',
            'not_at_rot_target',
            'not_at_target',
            'object_rez',
            'on_rez',
            'remote_data',
            'run_time_permissions',
            'sensor',
            'state_entry',
            'state_exit',
            'timer',
            'touch',
            'touch_end',
            'touch_start',
            ),
        4 => array( // data types
            'float',
            'integer',
            'key',
            'list',
            'rotation',
            'string',
            'vector',
            ),
        5 => array( // library
            'default',
            'llAbs',
            'llAcos',
            'llAddToLandBanList',
            'llAddToLandPassList',
            'llAdjustSoundVolume',
            'llAllowInventoryDrop',
            'llAngleBetween',
            'llApplyImpulse',
            'llApplyRotationalImpulse',
            'llAsin',
            'llAtan2',
            'llAttachToAvatar',
            'llAvatarOnSitTarget',
            'llAxes2Rot',
            'llAxisAngle2Rot',
            'llBase64ToInteger',
            'llBase64ToString',
            'llBreakAllLinks',
            'llBreakLink',
            'llCeil',
            'llClearCameraParams',
            'llCloseRemoteDataChannel',
            'llCloud',
            'llCollisionFilter',
            'llCollisionSound',
            'llCollisionSprite',
            'llCos',
            'llCreateLink',
            'llCSV2List',
            'llDeleteSubList',
            'llDeleteSubString',
            'llDetachFromAvatar',
            'llDetectedGrab',
            'llDetectedGroup',
            'llDetectedKey',
            'llDetectedLinkNumber',
            'llDetectedName',
            'llDetectedOwner',
            'llDetectedPos',
            'llDetectedRot',
            'llDetectedTouchBinormal',
            'llDetectedTouchFace',
            'llDetectedTouchNormal',
            'llDetectedTouchPos',
            'llDetectedTouchST',
            'llDetectedTouchUV',
            'llDetectedType',
            'llDetectedVel',
            'llDialog',
            'llDie',
            'llDumpList2String',
            'llEdgeOfWorld',
            'llEjectFromLand',
            'llEmail',
            'llEscapeURL',
            'llEuler2Rot',
            'llFabs',
            'llFloor',
            'llForceMouselook',
            'llFrand',
            'llGetAccel',
            'llGetAgentInfo',
            'llGetAgentLanguage',
            'llGetAgentSize',
            'llGetAlpha',
            'llGetAndResetTime',
            'llGetAnimation',
            'llGetAnimationList',
            'llGetAttached',
            'llGetBoundingBox',
            'llGetCameraPos',
            'llGetCameraRot',
            'llGetCenterOfMass',
            'llGetColor',
            'llGetCreator',
            'llGetDate',
            'llGetEnergy',
            'llGetForce',
            'llGetFreeMemory',
            'llGetGeometricCenter',
            'llGetGMTclock',
            'llGetInventoryCreator',
            'llGetInventoryKey',
            'llGetInventoryName',
            'llGetInventoryNumber',
            'llGetInventoryPermMask',
            'llGetInventoryType',
            'llGetKey',
            'llGetLandOwnerAt',
            'llGetLinkKey',
            'llGetLinkName',
            'llGetLinkNumber',
            'llGetListEntryType',
            'llGetListLength',
            'llGetLocalPos',
            'llGetLocalRot',
            'llGetMass',
            'llGetNextEmail',
            'llGetNotecardLine',
            'llGetNumberOfNotecardLines',
            'llGetNumberOfPrims',
            'llGetNumberOfSides',
            'llGetObjectDesc',
            'llGetObjectDetails',
            'llGetObjectMass',
            'llGetObjectName',
            'llGetObjectPermMask',
            'llGetObjectPrimCount',
            'llGetOmega',
            'llGetOwner',
            'llGetOwnerKey',
            'llGetParcelDetails',
            'llGetParcelFlags',
            'llGetParcelMaxPrims',
            'llGetParcelPrimCount',
            'llGetParcelPrimOwners',
            'llGetPermissions',
            'llGetPermissionsKey',
            'llGetPos',
            'llGetPrimitiveParams',
            'llGetRegionAgentCount',
            'llGetRegionCorner',
            'llGetRegionFlags',
            'llGetRegionFPS',
            'llGetRegionName',
            'llGetRegionTimeDilation',
            'llGetRootPosition',
            'llGetRootRotation',
            'llGetRot',
            'llGetScale',
            'llGetScriptName',
            'llGetScriptState',
            'llGetSimulatorHostname',
            'llGetStartParameter',
            'llGetStatus',
            'llGetSubString',
            'llGetSunDirection',
            'llGetTexture',
            'llGetTextureOffset',
            'llGetTextureRot',
            'llGetTextureScale',
            'llGetTime',
            'llGetTimeOfDay',
            'llGetTimestamp',
            'llGetTorque',
            'llGetUnixTime',
            'llGetVel',
            'llGetWallclock',
            'llGiveInventory',
            'llGiveInventoryList',
            'llGiveMoney',
            'llGround',
            'llGroundContour',
            'llGroundNormal',
            'llGroundRepel',
            'llGroundSlope',
            'llHTTPRequest',
            'llInsertString',
            'llInstantMessage',
            'llIntegerToBase64',
            'llKey2Name',
            'llList2CSV',
            'llList2Float',
            'llList2Integer',
            'llList2Key',
            'llList2List',
            'llList2ListStrided',
            'llList2Rot',
            'llList2String',
            'llList2Vector',
            'llListen',
            'llListenControl',
            'llListenRemove',
            'llListFindList',
            'llListInsertList',
            'llListRandomize',
            'llListReplaceList',
            'llListSort',
            'llListStatistics',
            'llLoadURL',
            'llLog',
            'llLog10',
            'llLookAt',
            'llLoopSound',
            'llLoopSoundMaster',
            'llLoopSoundSlave',
            'llMapDestination',
            'llMD5String',
            'llMessageLinked',
            'llMinEventDelay',
            'llModifyLand',
            'llModPow',
            'llMoveToTarget',
            'llOffsetTexture',
            'llOpenRemoteDataChannel',
            'llOverMyLand',
            'llOwnerSay',
            'llParcelMediaCommandList',
            'llParcelMediaQuery',
            'llParseString2List',
            'llParseStringKeepNulls',
            'llParticleSystem',
            'llPassCollisions',
            'llPassTouches',
            'llPlaySound',
            'llPlaySoundSlave',
            'llPow',
            'llPreloadSound',
            'llPushObject',
            'llRegionSay',
            'llReleaseControls',
            'llRemoteDataReply',
            'llRemoteDataSetRegion',
            'llRemoteLoadScriptPin',
            'llRemoveFromLandBanList',
            'llRemoveFromLandPassList',
            'llRemoveInventory',
            'llRemoveVehicleFlags',
            'llRequestAgentData',
            'llRequestInventoryData',
            'llRequestPermissions',
            'llRequestSimulatorData',
            'llResetLandBanList',
            'llResetLandPassList',
            'llResetOtherScript',
            'llResetScript',
            'llResetTime',
            'llRezAtRoot',
            'llRezObject',
            'llRot2Angle',
            'llRot2Axis',
            'llRot2Euler',
            'llRot2Fwd',
            'llRot2Left',
            'llRot2Up',
            'llRotateTexture',
            'llRotBetween',
            'llRotLookAt',
            'llRotTarget',
            'llRotTargetRemove',
            'llRound',
            'llSameGroup',
            'llSay',
            'llScaleTexture',
            'llScriptDanger',
            'llSendRemoteData',
            'llSensor',
            'llSensorRemove',
            'llSensorRepeat',
            'llSetAlpha',
            'llSetBuoyancy',
            'llSetCameraAtOffset',
            'llSetCameraEyeOffset',
            'llSetCameraParams',
            'llSetClickAction',
            'llSetColor',
            'llSetDamage',
            'llSetForce',
            'llSetForceAndTorque',
            'llSetHoverHeight',
            'llSetLinkAlpha',
            'llSetLinkColor',
            'llSetLinkPrimitiveParams',
            'llSetLinkTexture',
            'llSetLocalRot',
            'llSetObjectDesc',
            'llSetObjectName',
            'llSetParcelMusicURL',
            'llSetPayPrice',
            'llSetPos',
            'llSetPrimitiveParams',
            'llSetRemoteScriptAccessPin',
            'llSetRot',
            'llSetScale',
            'llSetScriptState',
            'llSetSitText',
            'llSetSoundQueueing',
            'llSetSoundRadius',
            'llSetStatus',
            'llSetText',
            'llSetTexture',
            'llSetTextureAnim',
            'llSetTimerEvent',
            'llSetTorque',
            'llSetTouchText',
            'llSetVehicleFlags',
            'llSetVehicleFloatParam',
            'llSetVehicleRotationParam',
            'llSetVehicleType',
            'llSetVehicleVectorParam',
            'llSHA1String',
            'llShout',
            'llSin',
            'llSitTarget',
            'llSleep',
            'llSqrt',
            'llStartAnimation',
            'llStopAnimation',
            'llStopHover',
            'llStopLookAt',
            'llStopMoveToTarget',
            'llStopSound',
            'llStringLength',
            'llStringToBase64',
            'llStringTrim',
            'llSubStringIndex',
            'llTakeControls',
            'llTan',
            'llTarget',
            'llTargetOmega',
            'llTargetRemove',
            'llTeleportAgentHome',
            'llToLower',
            'llToUpper',
            'llTriggerSound',
            'llTriggerSoundLimited',
            'llUnescapeURL',
            'llUnSit',
            'llVecDist',
            'llVecMag',
            'llVecNorm',
            'llVolumeDetect',
            'llWater',
            'llWhisper',
            'llWind',
            'llXorBase64StringsCorrect',
            ),
        6 => array( // deprecated
            'llMakeExplosion',
            'llMakeFire',
            'llMakeFountain',
            'llMakeSmoke',
            'llSound',
            'llSoundPreload',
            'llXorBase64Strings',
            ),
        7 => array( // unimplemented
            'llPointAt',
            'llRefreshPrimURL',
            'llReleaseCamera',
            'llRemoteLoadScript',
            'llSetPrimURL',
            'llStopPointAt',
            'llTakeCamera',
            'llTextBox',
            ),
        8 => array( // God mode
            'llGodLikeRezObject',
            'llSetInventoryPermMask',
            'llSetObjectPermMask',
            ),
        ),
    'SYMBOLS' => array(
        '{', '}', '(', ')', '[', ']',
        '=', '+', '-', '*', '/',
        '+=', '-=', '*=', '/=', '++', '--',
        '!', '%', '&amp;', '|', '&amp;&amp;', '||',
        '==', '!=', '&lt;', '&gt;', '&lt;=', '&gt;=',
        '~', '&lt;&lt;', '&gt;&gt;', '^', ':',
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => true,
        1 => true,
        2 => true,
        3 => true,
        4 => true,
        5 => true,
        6 => true,
        7 => true,
        8 => true,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000ff;',
            2 => 'color: #000080;',
            3 => 'color: #008080;',
            4 => 'color: #228b22;',
            5 => 'color: #b22222;',
            6 => 'color: #8b0000; background-color: #ffff00;',
            7 => 'color: #8b0000; background-color: #fa8072;',
            8 => 'color: #000000; background-color: #ba55d3;',
            ),
        'COMMENTS' => array(
            1 => 'color: #ff7f50; font-style: italic;',
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099;'
            ),
        'BRACKETS' => array(
            0 => 'color: #000000;'
            ),
        'STRINGS' => array(
            0 => 'color: #006400;'
            ),
        'NUMBERS' => array(
            0 => 'color: #000000;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #000000;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => 'http://www.lslwiki.net/lslwiki/wakka.php?wakka={FNAME}', // http://wiki.secondlife.com/wiki/{FNAME}
        4 => 'http://www.lslwiki.net/lslwiki/wakka.php?wakka={FNAME}', // http://wiki.secondlife.com/wiki/{FNAME}
        5 => 'http://www.lslwiki.net/lslwiki/wakka.php?wakka={FNAME}', // http://wiki.secondlife.com/wiki/{FNAME}
        6 => 'http://www.lslwiki.net/lslwiki/wakka.php?wakka={FNAME}', // http://wiki.secondlife.com/wiki/{FNAME}
        7 => 'http://www.lslwiki.net/lslwiki/wakka.php?wakka={FNAME}', // http://wiki.secondlife.com/wiki/{FNAME}
        8 => 'http://www.lslwiki.net/lslwiki/wakka.php?wakka={FNAME}', // http://wiki.secondlife.com/wiki/{FNAME}
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);
?>