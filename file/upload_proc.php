<?php
    // $_FILES에 담긴 배열 정보 구하기.
    var_dump($_FILES);

    //임시로 저장된 정보(tmp_name)
    $tmpFile = $_FILES['img']['tmp_name'];

    //파일타입 및 확장자 체크
    $fileTypeExt = explode("/", $_FILES['img']['type']);

    //파일 타입
    $fileType = $fileTypeExt[0]; //image

    //파일 확장자
    $fileExt = $fileTypeExt[1]; // jpg. png. etc

    //확장자 검사
    $extStatus = false;

    switch($fileExt) {
        case 'jpeg':
        case 'jpg':
        case 'gif':
        case 'bmp':
        case 'png':
            $extStatus = true;
            break;

        default:
            echo "You can not upload this file. (only jpg, bmp, gif, png)";
            exit;
            break;
    };

    //이미지 파일이 맞는지 검사
    if($fileType == 'image') {
        //허용할 확장자를 jpg, bmp, gif, png로 정함, 그 외에는 업로드 불가
        if($extStatus) {
            $res_path = "../img"; 
            if(!is_dir($res_path)) {
                mkdir($res_path, 0777, true); //0777 리눅스에 업로드에 대한 권한 주는 것 0, 7(user), 7(group), 7(other) = 모두에게 권한 줌
            }
            // 임시 파일 옮길 디렉토리 및 파일명
            $resFile = $res_path . "/{$_FILES['img']['name']}";
            // 임시 저장된 파일을 우리가 저장할 디렉토리 및 파일명으로 옮김
            $imageUpload = move_uploaded_file($tmpFile, $resFile);

            //업로드 성공 여부 확인
            if($imageUpload == true) {
                echo "This file is uploaded successfully. <br>";
                echo "<img src='{$resFile}' width='100' />";
            } else {
                echo "This file failed to upload. <br>";
            }
        } // end if - extStatus
          // 확장자가 jpg, bmp, gif, png가 아닌 경우 else문 실행
        else {
            echo "This file is not the image file. <br>";
        }
    }